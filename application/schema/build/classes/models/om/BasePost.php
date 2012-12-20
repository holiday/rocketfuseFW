<?php


/**
 * Base class that represents a row from the 'Posts' table.
 *
 * 
 *
 * @package    propel.generator.models.om
 */
abstract class BasePost extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PostPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PostPeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the user_id field.
	 * @var        int
	 */
	protected $user_id;

	/**
	 * The value for the pricefrom field.
	 * @var        int
	 */
	protected $pricefrom;

	/**
	 * The value for the priceto field.
	 * @var        int
	 */
	protected $priceto;

	/**
	 * The value for the yearfrom field.
	 * @var        int
	 */
	protected $yearfrom;

	/**
	 * The value for the yearto field.
	 * @var        int
	 */
	protected $yearto;

	/**
	 * The value for the car_make_id field.
	 * @var        int
	 */
	protected $car_make_id;

	/**
	 * The value for the car_model_id field.
	 * @var        int
	 */
	protected $car_model_id;

	/**
	 * The value for the transmission field.
	 * @var        string
	 */
	protected $transmission;

	/**
	 * The value for the tradein field.
	 * @var        int
	 */
	protected $tradein;

	/**
	 * The value for the posttype field.
	 * @var        string
	 */
	protected $posttype;

	/**
	 * The value for the comment field.
	 * @var        string
	 */
	protected $comment;

	/**
	 * The value for the datesubmitted field.
	 * @var        int
	 */
	protected $datesubmitted;

	/**
	 * The value for the activation field.
	 * @var        string
	 */
	protected $activation;

	/**
	 * The value for the active field.
	 * @var        boolean
	 */
	protected $active;

	/**
	 * @var        User
	 */
	protected $aUser;

	/**
	 * @var        CarMake
	 */
	protected $aCarMake;

	/**
	 * @var        CarModel
	 */
	protected $aCarModel;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [user_id] column value.
	 * 
	 * @return     int
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * Get the [pricefrom] column value.
	 * 
	 * @return     int
	 */
	public function getPricefrom()
	{
		return $this->pricefrom;
	}

	/**
	 * Get the [priceto] column value.
	 * 
	 * @return     int
	 */
	public function getPriceto()
	{
		return $this->priceto;
	}

	/**
	 * Get the [yearfrom] column value.
	 * 
	 * @return     int
	 */
	public function getYearfrom()
	{
		return $this->yearfrom;
	}

	/**
	 * Get the [yearto] column value.
	 * 
	 * @return     int
	 */
	public function getYearto()
	{
		return $this->yearto;
	}

	/**
	 * Get the [car_make_id] column value.
	 * 
	 * @return     int
	 */
	public function getCarMakeId()
	{
		return $this->car_make_id;
	}

	/**
	 * Get the [car_model_id] column value.
	 * 
	 * @return     int
	 */
	public function getCarModelId()
	{
		return $this->car_model_id;
	}

	/**
	 * Get the [transmission] column value.
	 * 
	 * @return     string
	 */
	public function getTransmission()
	{
		return $this->transmission;
	}

	/**
	 * Get the [tradein] column value.
	 * 
	 * @return     int
	 */
	public function getTradein()
	{
		return $this->tradein;
	}

	/**
	 * Get the [posttype] column value.
	 * 
	 * @return     string
	 */
	public function getPosttype()
	{
		return $this->posttype;
	}

	/**
	 * Get the [comment] column value.
	 * 
	 * @return     string
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * Get the [datesubmitted] column value.
	 * 
	 * @return     int
	 */
	public function getDatesubmitted()
	{
		return $this->datesubmitted;
	}

	/**
	 * Get the [activation] column value.
	 * 
	 * @return     string
	 */
	public function getActivation()
	{
		return $this->activation;
	}

	/**
	 * Get the [active] column value.
	 * 
	 * @return     boolean
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PostPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = PostPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [pricefrom] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setPricefrom($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pricefrom !== $v) {
			$this->pricefrom = $v;
			$this->modifiedColumns[] = PostPeer::PRICEFROM;
		}

		return $this;
	} // setPricefrom()

	/**
	 * Set the value of [priceto] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setPriceto($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->priceto !== $v) {
			$this->priceto = $v;
			$this->modifiedColumns[] = PostPeer::PRICETO;
		}

		return $this;
	} // setPriceto()

	/**
	 * Set the value of [yearfrom] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setYearfrom($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->yearfrom !== $v) {
			$this->yearfrom = $v;
			$this->modifiedColumns[] = PostPeer::YEARFROM;
		}

		return $this;
	} // setYearfrom()

	/**
	 * Set the value of [yearto] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setYearto($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->yearto !== $v) {
			$this->yearto = $v;
			$this->modifiedColumns[] = PostPeer::YEARTO;
		}

		return $this;
	} // setYearto()

	/**
	 * Set the value of [car_make_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setCarMakeId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->car_make_id !== $v) {
			$this->car_make_id = $v;
			$this->modifiedColumns[] = PostPeer::CAR_MAKE_ID;
		}

		if ($this->aCarMake !== null && $this->aCarMake->getId() !== $v) {
			$this->aCarMake = null;
		}

		return $this;
	} // setCarMakeId()

	/**
	 * Set the value of [car_model_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setCarModelId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->car_model_id !== $v) {
			$this->car_model_id = $v;
			$this->modifiedColumns[] = PostPeer::CAR_MODEL_ID;
		}

		if ($this->aCarModel !== null && $this->aCarModel->getId() !== $v) {
			$this->aCarModel = null;
		}

		return $this;
	} // setCarModelId()

	/**
	 * Set the value of [transmission] column.
	 * 
	 * @param      string $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setTransmission($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->transmission !== $v) {
			$this->transmission = $v;
			$this->modifiedColumns[] = PostPeer::TRANSMISSION;
		}

		return $this;
	} // setTransmission()

	/**
	 * Set the value of [tradein] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setTradein($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tradein !== $v) {
			$this->tradein = $v;
			$this->modifiedColumns[] = PostPeer::TRADEIN;
		}

		return $this;
	} // setTradein()

	/**
	 * Set the value of [posttype] column.
	 * 
	 * @param      string $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setPosttype($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->posttype !== $v) {
			$this->posttype = $v;
			$this->modifiedColumns[] = PostPeer::POSTTYPE;
		}

		return $this;
	} // setPosttype()

	/**
	 * Set the value of [comment] column.
	 * 
	 * @param      string $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setComment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comment !== $v) {
			$this->comment = $v;
			$this->modifiedColumns[] = PostPeer::COMMENT;
		}

		return $this;
	} // setComment()

	/**
	 * Set the value of [datesubmitted] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setDatesubmitted($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->datesubmitted !== $v) {
			$this->datesubmitted = $v;
			$this->modifiedColumns[] = PostPeer::DATESUBMITTED;
		}

		return $this;
	} // setDatesubmitted()

	/**
	 * Set the value of [activation] column.
	 * 
	 * @param      string $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setActivation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->activation !== $v) {
			$this->activation = $v;
			$this->modifiedColumns[] = PostPeer::ACTIVATION;
		}

		return $this;
	} // setActivation()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->active !== $v) {
			$this->active = $v;
			$this->modifiedColumns[] = PostPeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->pricefrom = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->priceto = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->yearfrom = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->yearto = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->car_make_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->car_model_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->transmission = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->tradein = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->posttype = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->comment = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->datesubmitted = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->activation = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->active = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 15; // 15 = PostPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Post object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aUser !== null && $this->user_id !== $this->aUser->getId()) {
			$this->aUser = null;
		}
		if ($this->aCarMake !== null && $this->car_make_id !== $this->aCarMake->getId()) {
			$this->aCarMake = null;
		}
		if ($this->aCarModel !== null && $this->car_model_id !== $this->aCarModel->getId()) {
			$this->aCarModel = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PostPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aUser = null;
			$this->aCarMake = null;
			$this->aCarModel = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = PostQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				PostPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aUser !== null) {
				if ($this->aUser->isModified() || $this->aUser->isNew()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}

			if ($this->aCarMake !== null) {
				if ($this->aCarMake->isModified() || $this->aCarMake->isNew()) {
					$affectedRows += $this->aCarMake->save($con);
				}
				$this->setCarMake($this->aCarMake);
			}

			if ($this->aCarModel !== null) {
				if ($this->aCarModel->isModified() || $this->aCarModel->isNew()) {
					$affectedRows += $this->aCarModel->save($con);
				}
				$this->setCarModel($this->aCarModel);
			}

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = PostPeer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . PostPeer::ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(PostPeer::ID)) {
			$modifiedColumns[':p' . $index++]  = '`ID`';
		}
		if ($this->isColumnModified(PostPeer::USER_ID)) {
			$modifiedColumns[':p' . $index++]  = '`USER_ID`';
		}
		if ($this->isColumnModified(PostPeer::PRICEFROM)) {
			$modifiedColumns[':p' . $index++]  = '`PRICEFROM`';
		}
		if ($this->isColumnModified(PostPeer::PRICETO)) {
			$modifiedColumns[':p' . $index++]  = '`PRICETO`';
		}
		if ($this->isColumnModified(PostPeer::YEARFROM)) {
			$modifiedColumns[':p' . $index++]  = '`YEARFROM`';
		}
		if ($this->isColumnModified(PostPeer::YEARTO)) {
			$modifiedColumns[':p' . $index++]  = '`YEARTO`';
		}
		if ($this->isColumnModified(PostPeer::CAR_MAKE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`CAR_MAKE_ID`';
		}
		if ($this->isColumnModified(PostPeer::CAR_MODEL_ID)) {
			$modifiedColumns[':p' . $index++]  = '`CAR_MODEL_ID`';
		}
		if ($this->isColumnModified(PostPeer::TRANSMISSION)) {
			$modifiedColumns[':p' . $index++]  = '`TRANSMISSION`';
		}
		if ($this->isColumnModified(PostPeer::TRADEIN)) {
			$modifiedColumns[':p' . $index++]  = '`TRADEIN`';
		}
		if ($this->isColumnModified(PostPeer::POSTTYPE)) {
			$modifiedColumns[':p' . $index++]  = '`POSTTYPE`';
		}
		if ($this->isColumnModified(PostPeer::COMMENT)) {
			$modifiedColumns[':p' . $index++]  = '`COMMENT`';
		}
		if ($this->isColumnModified(PostPeer::DATESUBMITTED)) {
			$modifiedColumns[':p' . $index++]  = '`DATESUBMITTED`';
		}
		if ($this->isColumnModified(PostPeer::ACTIVATION)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVATION`';
		}
		if ($this->isColumnModified(PostPeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}

		$sql = sprintf(
			'INSERT INTO `Posts` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID`':
						$stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
						break;
					case '`USER_ID`':
						$stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
						break;
					case '`PRICEFROM`':
						$stmt->bindValue($identifier, $this->pricefrom, PDO::PARAM_INT);
						break;
					case '`PRICETO`':
						$stmt->bindValue($identifier, $this->priceto, PDO::PARAM_INT);
						break;
					case '`YEARFROM`':
						$stmt->bindValue($identifier, $this->yearfrom, PDO::PARAM_INT);
						break;
					case '`YEARTO`':
						$stmt->bindValue($identifier, $this->yearto, PDO::PARAM_INT);
						break;
					case '`CAR_MAKE_ID`':
						$stmt->bindValue($identifier, $this->car_make_id, PDO::PARAM_INT);
						break;
					case '`CAR_MODEL_ID`':
						$stmt->bindValue($identifier, $this->car_model_id, PDO::PARAM_INT);
						break;
					case '`TRANSMISSION`':
						$stmt->bindValue($identifier, $this->transmission, PDO::PARAM_STR);
						break;
					case '`TRADEIN`':
						$stmt->bindValue($identifier, $this->tradein, PDO::PARAM_INT);
						break;
					case '`POSTTYPE`':
						$stmt->bindValue($identifier, $this->posttype, PDO::PARAM_STR);
						break;
					case '`COMMENT`':
						$stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
						break;
					case '`DATESUBMITTED`':
						$stmt->bindValue($identifier, $this->datesubmitted, PDO::PARAM_INT);
						break;
					case '`ACTIVATION`':
						$stmt->bindValue($identifier, $this->activation, PDO::PARAM_STR);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setId($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}

			if ($this->aCarMake !== null) {
				if (!$this->aCarMake->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCarMake->getValidationFailures());
				}
			}

			if ($this->aCarModel !== null) {
				if (!$this->aCarModel->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCarModel->getValidationFailures());
				}
			}


			if (($retval = PostPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUserId();
				break;
			case 2:
				return $this->getPricefrom();
				break;
			case 3:
				return $this->getPriceto();
				break;
			case 4:
				return $this->getYearfrom();
				break;
			case 5:
				return $this->getYearto();
				break;
			case 6:
				return $this->getCarMakeId();
				break;
			case 7:
				return $this->getCarModelId();
				break;
			case 8:
				return $this->getTransmission();
				break;
			case 9:
				return $this->getTradein();
				break;
			case 10:
				return $this->getPosttype();
				break;
			case 11:
				return $this->getComment();
				break;
			case 12:
				return $this->getDatesubmitted();
				break;
			case 13:
				return $this->getActivation();
				break;
			case 14:
				return $this->getActive();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Post'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Post'][$this->getPrimaryKey()] = true;
		$keys = PostPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getPricefrom(),
			$keys[3] => $this->getPriceto(),
			$keys[4] => $this->getYearfrom(),
			$keys[5] => $this->getYearto(),
			$keys[6] => $this->getCarMakeId(),
			$keys[7] => $this->getCarModelId(),
			$keys[8] => $this->getTransmission(),
			$keys[9] => $this->getTradein(),
			$keys[10] => $this->getPosttype(),
			$keys[11] => $this->getComment(),
			$keys[12] => $this->getDatesubmitted(),
			$keys[13] => $this->getActivation(),
			$keys[14] => $this->getActive(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aUser) {
				$result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aCarMake) {
				$result['CarMake'] = $this->aCarMake->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aCarModel) {
				$result['CarModel'] = $this->aCarModel->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUserId($value);
				break;
			case 2:
				$this->setPricefrom($value);
				break;
			case 3:
				$this->setPriceto($value);
				break;
			case 4:
				$this->setYearfrom($value);
				break;
			case 5:
				$this->setYearto($value);
				break;
			case 6:
				$this->setCarMakeId($value);
				break;
			case 7:
				$this->setCarModelId($value);
				break;
			case 8:
				$this->setTransmission($value);
				break;
			case 9:
				$this->setTradein($value);
				break;
			case 10:
				$this->setPosttype($value);
				break;
			case 11:
				$this->setComment($value);
				break;
			case 12:
				$this->setDatesubmitted($value);
				break;
			case 13:
				$this->setActivation($value);
				break;
			case 14:
				$this->setActive($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PostPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPricefrom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPriceto($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setYearfrom($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setYearto($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCarMakeId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCarModelId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTransmission($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTradein($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPosttype($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setComment($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDatesubmitted($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setActivation($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setActive($arr[$keys[14]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PostPeer::DATABASE_NAME);

		if ($this->isColumnModified(PostPeer::ID)) $criteria->add(PostPeer::ID, $this->id);
		if ($this->isColumnModified(PostPeer::USER_ID)) $criteria->add(PostPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(PostPeer::PRICEFROM)) $criteria->add(PostPeer::PRICEFROM, $this->pricefrom);
		if ($this->isColumnModified(PostPeer::PRICETO)) $criteria->add(PostPeer::PRICETO, $this->priceto);
		if ($this->isColumnModified(PostPeer::YEARFROM)) $criteria->add(PostPeer::YEARFROM, $this->yearfrom);
		if ($this->isColumnModified(PostPeer::YEARTO)) $criteria->add(PostPeer::YEARTO, $this->yearto);
		if ($this->isColumnModified(PostPeer::CAR_MAKE_ID)) $criteria->add(PostPeer::CAR_MAKE_ID, $this->car_make_id);
		if ($this->isColumnModified(PostPeer::CAR_MODEL_ID)) $criteria->add(PostPeer::CAR_MODEL_ID, $this->car_model_id);
		if ($this->isColumnModified(PostPeer::TRANSMISSION)) $criteria->add(PostPeer::TRANSMISSION, $this->transmission);
		if ($this->isColumnModified(PostPeer::TRADEIN)) $criteria->add(PostPeer::TRADEIN, $this->tradein);
		if ($this->isColumnModified(PostPeer::POSTTYPE)) $criteria->add(PostPeer::POSTTYPE, $this->posttype);
		if ($this->isColumnModified(PostPeer::COMMENT)) $criteria->add(PostPeer::COMMENT, $this->comment);
		if ($this->isColumnModified(PostPeer::DATESUBMITTED)) $criteria->add(PostPeer::DATESUBMITTED, $this->datesubmitted);
		if ($this->isColumnModified(PostPeer::ACTIVATION)) $criteria->add(PostPeer::ACTIVATION, $this->activation);
		if ($this->isColumnModified(PostPeer::ACTIVE)) $criteria->add(PostPeer::ACTIVE, $this->active);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PostPeer::DATABASE_NAME);
		$criteria->add(PostPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Post (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setUserId($this->getUserId());
		$copyObj->setPricefrom($this->getPricefrom());
		$copyObj->setPriceto($this->getPriceto());
		$copyObj->setYearfrom($this->getYearfrom());
		$copyObj->setYearto($this->getYearto());
		$copyObj->setCarMakeId($this->getCarMakeId());
		$copyObj->setCarModelId($this->getCarModelId());
		$copyObj->setTransmission($this->getTransmission());
		$copyObj->setTradein($this->getTradein());
		$copyObj->setPosttype($this->getPosttype());
		$copyObj->setComment($this->getComment());
		$copyObj->setDatesubmitted($this->getDatesubmitted());
		$copyObj->setActivation($this->getActivation());
		$copyObj->setActive($this->getActive());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Post Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     PostPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PostPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a User object.
	 *
	 * @param      User $v
	 * @return     Post The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setUser(User $v = null)
	{
		if ($v === null) {
			$this->setUserId(NULL);
		} else {
			$this->setUserId($v->getId());
		}

		$this->aUser = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the User object, it will not be re-added.
		if ($v !== null) {
			$v->addPost($this);
		}

		return $this;
	}


	/**
	 * Get the associated User object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     User The associated User object.
	 * @throws     PropelException
	 */
	public function getUser(PropelPDO $con = null)
	{
		if ($this->aUser === null && ($this->user_id !== null)) {
			$this->aUser = UserQuery::create()->findPk($this->user_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aUser->addPosts($this);
			 */
		}
		return $this->aUser;
	}

	/**
	 * Declares an association between this object and a CarMake object.
	 *
	 * @param      CarMake $v
	 * @return     Post The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCarMake(CarMake $v = null)
	{
		if ($v === null) {
			$this->setCarMakeId(NULL);
		} else {
			$this->setCarMakeId($v->getId());
		}

		$this->aCarMake = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the CarMake object, it will not be re-added.
		if ($v !== null) {
			$v->addPost($this);
		}

		return $this;
	}


	/**
	 * Get the associated CarMake object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     CarMake The associated CarMake object.
	 * @throws     PropelException
	 */
	public function getCarMake(PropelPDO $con = null)
	{
		if ($this->aCarMake === null && ($this->car_make_id !== null)) {
			$this->aCarMake = CarMakeQuery::create()->findPk($this->car_make_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCarMake->addPosts($this);
			 */
		}
		return $this->aCarMake;
	}

	/**
	 * Declares an association between this object and a CarModel object.
	 *
	 * @param      CarModel $v
	 * @return     Post The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCarModel(CarModel $v = null)
	{
		if ($v === null) {
			$this->setCarModelId(NULL);
		} else {
			$this->setCarModelId($v->getId());
		}

		$this->aCarModel = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the CarModel object, it will not be re-added.
		if ($v !== null) {
			$v->addPost($this);
		}

		return $this;
	}


	/**
	 * Get the associated CarModel object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     CarModel The associated CarModel object.
	 * @throws     PropelException
	 */
	public function getCarModel(PropelPDO $con = null)
	{
		if ($this->aCarModel === null && ($this->car_model_id !== null)) {
			$this->aCarModel = CarModelQuery::create()->findPk($this->car_model_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCarModel->addPosts($this);
			 */
		}
		return $this->aCarModel;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->user_id = null;
		$this->pricefrom = null;
		$this->priceto = null;
		$this->yearfrom = null;
		$this->yearto = null;
		$this->car_make_id = null;
		$this->car_model_id = null;
		$this->transmission = null;
		$this->tradein = null;
		$this->posttype = null;
		$this->comment = null;
		$this->datesubmitted = null;
		$this->activation = null;
		$this->active = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

		$this->aUser = null;
		$this->aCarMake = null;
		$this->aCarModel = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(PostPeer::DEFAULT_STRING_FORMAT);
	}

} // BasePost
