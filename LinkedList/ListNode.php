<?php

namespace Hakam\LeetCodePhp\LinkedList;

/**
 * @covers \Hakam\LeetCodePhp\LinkedList\ListNode
 */
class ListNode
{
    public int $val = 0;
    public ?ListNode $next = null;

    /**
     * @param int $val
     * @param null $next
     * @codeCoverageIgnore
     */
    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}