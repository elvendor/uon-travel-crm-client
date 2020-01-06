<?php

namespace UON\Endpoints;

use UON\Client;
use UON\Interfaces\QueryInterface;

/**
 * Class Reminders
 *
 * @package UON\Endpoint
 */
class Reminders extends Client
{
    /**
     * Create new reminder
     *
     * @link https://api.u-on.ru/{key}/reminder/create.{_format}
     *
     * @param array $parameters List of parameters
     *
     * @return \UON\Interfaces\QueryInterface
     */
    public function create(array $parameters): QueryInterface
    {
        // Set HTTP params
        $this->type     = 'post';
        $this->endpoint = 'reminder/create';
        $this->params   = $parameters;

        return $this;
    }

    /**
     * Get reminder by id
     *
     * @link https://api.u-on.ru/{key}/reminder/{r_id}.{_format}
     *
     * @param int $id Unique ID of reminder
     *
     * @return \UON\Interfaces\QueryInterface
     */
    public function get($id): QueryInterface
    {
        // Set HTTP params
        $this->type     = 'get';
        $this->endpoint = 'reminder/' . $id;

        return $this;
    }

}
