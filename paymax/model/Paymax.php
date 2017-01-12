<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/6 下午3:25
 * Description:
 */

namespace Paymax\model;

class Paymax implements \ArrayAccess
{
    protected $_values;
    protected $_opts;

    public function __construct($id = null, $opts = null)
    {
        $this->_values = array();

        $this-> _opts = array();
        if (is_array($id)) {
            foreach ($id as $key => $value) {
                if ($key != 'id')
                    $this-> _opts[$key] = $value;
            }
            $id = $id['id'];
        }

        if ($id)
            $this->id = $id;
    }

    public function offsetExists($k)
    {
    }

    public function offsetGet($k)
    {
        return array_key_exists($k, $this->_values) ? $this->_values[$k] : null;
    }

    public function offsetSet($k, $v)
    {
        $this->$k = $v;
    }

    public function offsetUnset($k)
    {
        unset($this->$k);
    }
}