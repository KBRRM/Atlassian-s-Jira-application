<?php

namespace Atlassian\JiraRest\Requests\Agile\Board\Parameters;

use Atlassian\JiraRest\Requests\AbstractParameters;

/**
 * Class ProjectsParameters
 *
 * @package Atlassian\JiraRest\Requests\Agile\Board\Parameters
 * @see https://developer.atlassian.com/cloud/jira/software/rest/#api-board-boardId-project-get
 *
 * @deprecated Use your own abstraction of \Atlassian\JiraRest\Requests\AbstractParameters or use an array instead
 */
class ProjectsParameters extends AbstractParameters
{

    /**
     * The maximum number of boards to return per page.
     *
     * @var int
     */
    public $maxResults = 100;

    /**
     * The starting index of the returned boards. Base index: 0.
     *
     * @var int
     */
    public $startAt = 0;
}
