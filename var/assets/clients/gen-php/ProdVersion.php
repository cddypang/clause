<?php
/**
 * Autogenerated by Thrift Compiler (0.12.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

/**
 * 上线版本
 */
class ProdVersion
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'chatbotID',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'version',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'active',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        4 => array(
            'var' => 'latest',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        5 => array(
            'var' => 'id',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'operated',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'notes',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        8 => array(
            'var' => 'createdate',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $chatbotID = null;
    /**
     * @var string
     */
    public $version = null;
    /**
     * @var bool
     */
    public $active = null;
    /**
     * @var bool
     */
    public $latest = null;
    /**
     * @var string
     */
    public $id = null;
    /**
     * @var string
     */
    public $operated = null;
    /**
     * @var string
     */
    public $notes = null;
    /**
     * @var string
     */
    public $createdate = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['chatbotID'])) {
                $this->chatbotID = $vals['chatbotID'];
            }
            if (isset($vals['version'])) {
                $this->version = $vals['version'];
            }
            if (isset($vals['active'])) {
                $this->active = $vals['active'];
            }
            if (isset($vals['latest'])) {
                $this->latest = $vals['latest'];
            }
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['operated'])) {
                $this->operated = $vals['operated'];
            }
            if (isset($vals['notes'])) {
                $this->notes = $vals['notes'];
            }
            if (isset($vals['createdate'])) {
                $this->createdate = $vals['createdate'];
            }
        }
    }

    public function getName()
    {
        return 'ProdVersion';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->chatbotID);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->version);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->active);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->latest);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->operated);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->notes);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->createdate);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('ProdVersion');
        if ($this->chatbotID !== null) {
            $xfer += $output->writeFieldBegin('chatbotID', TType::STRING, 1);
            $xfer += $output->writeString($this->chatbotID);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->version !== null) {
            $xfer += $output->writeFieldBegin('version', TType::STRING, 2);
            $xfer += $output->writeString($this->version);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->active !== null) {
            $xfer += $output->writeFieldBegin('active', TType::BOOL, 3);
            $xfer += $output->writeBool($this->active);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->latest !== null) {
            $xfer += $output->writeFieldBegin('latest', TType::BOOL, 4);
            $xfer += $output->writeBool($this->latest);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::STRING, 5);
            $xfer += $output->writeString($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->operated !== null) {
            $xfer += $output->writeFieldBegin('operated', TType::STRING, 6);
            $xfer += $output->writeString($this->operated);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->notes !== null) {
            $xfer += $output->writeFieldBegin('notes', TType::STRING, 7);
            $xfer += $output->writeString($this->notes);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->createdate !== null) {
            $xfer += $output->writeFieldBegin('createdate', TType::STRING, 8);
            $xfer += $output->writeString($this->createdate);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
