<?php

declare(strict_types=1);

namespace SolMaker\Pagination;

/**
 * Class Page represent pagination DTO object
 * @package SolMaker\Pagination
 */
class Page
{
    public const DEFAULT_FIRST_PAGE = 1;
    public const DEFAULT_PAGE_LIMIT = 10;
    public const DEFAULT_PAGE_OFFSET = 0;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $limit;

    /**
     * @var int
     */
    protected $offset;

    /**
     * Pagination constructor.
     * @param int $page
     * @param int $limit
     * @param int $offset
     */
    public function __construct(
        int $page = self::DEFAULT_FIRST_PAGE,
        int $limit = self::DEFAULT_PAGE_LIMIT,
        int $offset = self::DEFAULT_PAGE_OFFSET
    ) {
        $this->page = $page;
        $this->limit = $limit;
        if (0 === $offset) {
            $this->offset = ($this->page - 1) * $limit;
        } else {
            $this->offset = $offset;
        }
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }
}