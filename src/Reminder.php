<?php namespace UON;

/**
 * Class Reminder
 * @package UON
 */
class Reminder extends Client
{
    public function __construct($token)
    {
        parent::__construct();
        $this->token = $token;
    }

    /**
     * Create new reminder
     * @link https://api.u-on.ru/{key}/reminder/create.{_format}
     * @param null|array $parameters - List of parameters
     * @return array
     */
    public function create($parameters)
    {
        $endpoint = '/reminder/create';
        return $this->doRequest('post', $endpoint, $parameters);
    }

    /**
     * Get reminder by id
     * @link https://api.u-on.ru/{key}/reminder/{r_id}.{_format}
     * @param integer $r_id - Unique ID of reminder
     * @return array
     */
    public function get($r_id)
    {
        $endpoint = '/reminder';
        return $this->doRequest('get', $endpoint);
    }


}
