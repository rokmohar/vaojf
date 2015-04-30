<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class Currency extends Model
{
    /**@+*/
    const COLUMN_CODE = 'code';
    const COLUMN_NAME = 'name';
    /**@-/

    /**
     * @var string
     */
    protected $table = 'currencies';

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getAttribute(static::COLUMN_CODE);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getAttribute(static::COLUMN_NAME);
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getCreatedAt()
    {
        return $this->getAttribute(static::CREATED_AT);
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getUpdatedAt()
    {
        return $this->getAttribute(static::UPDATED_AT);
    }
}