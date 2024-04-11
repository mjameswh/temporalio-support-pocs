<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Samples\Child;

use Carbon\CarbonInterval;
use Temporal\Workflow;

/**
 * Demonstrates a child workflow. Requires a local instance of the Temporal server to be running.
 */
class ParentWorkflow implements ParentWorkflowInterface
{
    public function greet(int $sleepChild)
    {

        $name = Workflow::getInfo()->execution->getID();

        yield Workflow::timer(CarbonInterval::seconds($sleepChild));

        $child = Workflow::newChildWorkflowStub(ChildWorkflow::class);

        $childGreet = $child->greet($name);

        // Do something else here.

        return 'Hello ' . $name . ' from parent; ' . yield $childGreet;
    }
}