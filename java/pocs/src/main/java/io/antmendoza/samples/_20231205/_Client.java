package io.antmendoza.samples._20231205;

import io.antmendoza.samples.WorkflowClientFactory;
import io.temporal.api.common.v1.WorkflowExecution;
import io.temporal.client.WorkflowClient;
import io.temporal.client.WorkflowOptions;

import java.util.concurrent.CompletableFuture;
import java.util.stream.IntStream;

public class _Client {

    public static String TASK_QUEUE = "my-task-queue";


    public static void main(String[] args) {


        WorkflowClient client = WorkflowClientFactory.get();
        final WorkflowOptions build = WorkflowOptions
                .newBuilder()
                .setTaskQueue(TASK_QUEUE)
                .build();


        WizardUIWorkflow workflow = client
                .newWorkflowStub(WizardUIWorkflow.class,
                        build);
        WorkflowExecution execution = WorkflowClient.start(workflow::run);

        try {

            submitScreen(workflow, 1);
        } catch (Exception e) {
            e.printStackTrace();
            System.out.println(">>>>> " + e.getClass());
        }


        IntStream.rangeClosed(1, 2).parallel().forEach(r -> {
            CompletableFuture.runAsync(() -> {
                //  submitScreen(workflow, r);
            });

            CompletableFuture.runAsync(() -> {
                //  submitScreen(workflow, r);
            });

        });


        try {
            Thread.sleep(15000);
        } catch (InterruptedException e) {
            throw new RuntimeException(e);
        }

    }

    private static void submitScreen(WizardUIWorkflow workflow, int r) {
        try {
            workflow
                    .submitScreen(new UIRequest(r + ""));
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

}