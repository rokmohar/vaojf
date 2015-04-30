<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class Institute extends Model
{
    /**
     * @param string
     */
    protected $primaryKey = 'code';

    /**
     * @var string
     */
    protected $table = 'institutes';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getAttribute('code');
    }

    /**
     * @return \App\Models\Category
     */
    public function getCategory()
    {
        return $this->getAttribute('category');
    }

    /**
     * @param \App\Models\Category $category
     *
     * @return $this
     *
     * @throws \InvalidArgumentException If the argument is not NULL or instance of the expected model.
     */
    public function setCategory($category = NULL)
    {
        if (is_null($category)) {
            // Disassociate the model
            $this->category()->dissociate();
        }
        else if ($category instanceof Category) {
            // Associate the model with the institute
            $this->category()->associate($category);
        }
        else {
            // Throw an exception
            throw new \InvalidArgumentException(sprintf(
                "Expected an instance of \App\Models\Category, %s given",
                is_object($category) ? get_class($category) : gettype($category)
            ));
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getAttribute('name');
    }

    /**
     * @return integer
     */
    public function getRegisterNumber()
    {
        return $this->getAttribute('register_number');
    }

    /**
     * @return integer
     */
    public function getVatNumber()
    {
        return $this->getAttribute('vat_number');
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