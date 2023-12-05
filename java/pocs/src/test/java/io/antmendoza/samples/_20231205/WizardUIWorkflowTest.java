package io.antmendoza.samples._20231205;

import io.antmendoza.samples.TestEnvironment;
import io.antmendoza.samples.TestUtilInterceptorTracker;
import io.antmendoza.samples._20231006.TestUtilWorkerInterceptor;
import io.temporal.api.common.v1.WorkflowExecution;
import io.temporal.api.enums.v1.WorkflowExecutionStatus;
import io.temporal.client.WorkflowClient;
import io.temporal.client.WorkflowOptions;
import io.temporal.testing.TestWorkflowRule;
import io.temporal.worker.WorkerFactoryOptions;
import org.junit.After;
import org.junit.Rule;
import org.junit.Test;

import static org.junit.Assert.assertEquals;

public class WizardUIWorkflowTest {


    private static TestUtilInterceptorTracker testUtilInterceptorTracker =
            new TestUtilInterceptorTracker();

    // set to true if you want to run the test against a real server
    private final boolean useExternalService = false;
    @Rule
    public TestWorkflowRule testWorkflowRule = createTestRule().build();

    @After
    public void after() {
        testWorkflowRule.getTestEnvironment().shutdown();
        testUtilInterceptorTracker = new TestUtilInterceptorTracker();
    }



    @Test
    public void testStartWorkflow() {
        final String namespace = testWorkflowRule.getTestEnvironment().getNamespace();
        final String workflowId = "my-workflow-" + Math.random();
        testWorkflowRule.getWorker().registerActivitiesImplementations(new WizardUIActivity.WizardUIActivityImpl());
        testWorkflowRule.getTestEnvironment().start();

        final WorkflowClient workflowClient = testWorkflowRule.getWorkflowClient();
        final WizardUIWorkflow workflowExecution = createWorkflowStub(workflowId, workflowClient);


        //start async
        final WorkflowExecution execution = WorkflowClient.start(workflowExecution::run, null);


        workflowExecution.submitScreen(new UIData(Math.random()+""));


        // wait for main workflow to complete
        workflowClient.newUntypedWorkflowStub(workflowId).getResult(Void.class);
        assertEquals(
                WorkflowExecutionStatus.WORKFLOW_EXECUTION_STATUS_COMPLETED,
                TestEnvironment.describeWorkflowExecution(execution, namespace,testWorkflowRule).getWorkflowExecutionInfo().getStatus());
    }

    private WizardUIWorkflow createWorkflowStub(String workflowId, WorkflowClient workflowClient) {
        final WorkflowOptions options =
                WorkflowOptions.newBuilder()
                        .setTaskQueue(testWorkflowRule.getTaskQueue())
                        .setWorkflowId(workflowId)
                        .build();
        final WizardUIWorkflow workflow =
                workflowClient.newWorkflowStub(WizardUIWorkflow.class, options);
        return workflow;
    }

    private TestWorkflowRule.Builder createTestRule() {
        TestWorkflowRule.Builder builder =
                TestWorkflowRule.newBuilder()
                        .setWorkerFactoryOptions(
                                WorkerFactoryOptions.newBuilder()
                                        .setWorkerInterceptors(
                                                new TestUtilWorkerInterceptor(testUtilInterceptorTracker))
                                        .build())
                        .setWorkflowTypes(
                                WizardUIWorkflow.WizardUIWorkflowImpl.class)
                        .setDoNotStart(true);

        if (useExternalService) {
            builder
                    .setUseExternalService(useExternalService)
                    .setTarget("127.0.0.1:7233") // default 127.0.0.1:7233
                    .setNamespace("default"); // default
        }

        return builder;
    }

}