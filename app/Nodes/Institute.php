<?php namespace App\Nodes;

use Vinelab\NeoEloquent\Eloquent\Model;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class Institute extends Model
{
    /**@+*/
    const COLUMN_CODE = 'bu_code';
    /**@-*/

    /**
     * @var string
     */
    protected $connection = 'neo4j';

    /**
     * @var string
     */
    protected $label = 'Institute';

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getAttribute(static::COLUMN_CODE);
    }
}