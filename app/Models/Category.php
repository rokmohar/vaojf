<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class Category extends Model
{
    /**@+*/
    const COLUMN_ID   = 'id';
    const COLUMN_NAME = 'name';
    /**@-/

    /**
     * @var string
     */
    protected $table = 'categories';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getAttribute(static::COLUMN_ID);
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