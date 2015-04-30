<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class Transaction extends Model
{
    /**
     * @var string
     */
    protected $table = 'transactions';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected function currency()
    {
        return $this->belongsTo('App\Models\Currency', 'currency_code', 'code');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected function institute()
    {
        return $this->belongsTo('App\Models\Institute', 'institute_code', 'code');
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getAttribute('id');
    }

    /**
     * @return \App\Models\Currency
     */
    public function getCurrency()
    {
        return $this->getAttribute('currency');
    }

    /**
     * @param \App\Models\Currency $currency
     *
     * @return $this
     *
     * @throws \InvalidArgumentException If the argument is not NULL or instance of the expected model.
     */
    public function setCurrency($currency = NULL)
    {
        if (is_null($currency)) {
            // Disassociate the model
            $this->currency()->dissociate();
        }
        else if ($currency instanceof Currency) {
            // Associate the model with the transaction
            $this->currency()->associate($currency);
        }
        else {
            // Throw an exception
            throw new \InvalidArgumentException(sprintf(
                "Expected an instance of \App\Models\Currency, %s given",
                is_object($currency) ? get_class($currency) : gettype($currency)
            ));
        }

        return $this;
    }

    /**
     * @return \App\Models\Institute
     */
    public function getInstitute()
    {
        return $this->getAttribute('institute');
    }

    /**
     * @param \App\Models\Institute $institute
     *
     * @return $this
     *
     * @throws \InvalidArgumentException If the argument is not NULL or instance of the expected model.
     */
    public function setInstitute($institute = NULL)
    {
        if (is_null($institute)) {
            // Disassociate the model
            $this->institute()->dissociate();
        }
        else if ($institute instanceof Institute) {
            // Associate the model with the transaction
            $this->institute()->associate($institute);
        }
        else {
            // Throw an exception
            throw new \InvalidArgumentException(sprintf(
                "Expected an instance of \App\Models\Institute, %s given",
                is_object($institute) ? get_class($institute) : gettype($institute)
            ));
        }

        return $this;
    }

    /**
     * @return WHAT?
     */
    public function getTransactionAt()
    {
        return $this->getAttribute('transaction_at');
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->getAttribute('amount');
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