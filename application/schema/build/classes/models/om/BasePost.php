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
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the userid field.
	 * @var        int
	 */
	protected $userid;

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
	 * The value for the carmakeid field.
	 * @var        int
	 */
	protected $carmakeid;

	/**
	 * The value for the carmodelid field.
	 * @var        int
	 */
	protected $carmodelid;

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
	 * The value for the comment field.
	 * @var        string
	 */
	protected $comment;

	/**
	 * The value for the submitted field.
	 * @var        int
	 */
	protected $submitted;

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
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Get the [userid] column value.
	 * 
	 * @return     int
	 */
	public function getUserid()
	{
		return $this->userid;
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
	 * Get the [carmakeid] column value.
	 * 
	 * @return     int
	 */
	public function getCarmakeid()
	{
		return $this->carmakeid;
	}

	/**
	 * Get the [carmodelid] column value.
	 * 
	 * @return     int
	 */
	public function getCarmodelid()
	{
		return $this->carmodelid;
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
	 * Get the [comment] column value.
	 * 
	 * @return     string
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * Get the [submitted] column value.
	 * 
	 * @return     int
	 */
	public function getSubmitted()
	{
		return $this->submitted;
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
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = PostPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [userid] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setUserid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->userid !== $v) {
			$this->userid = $v;
			$this->modifiedColumns[] = PostPeer::USERID;
		}

		return $this;
	} // setUserid()

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
	 * Set the value of [carmakeid] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setCarmakeid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->carmakeid !== $v) {
			$this->carmakeid = $v;
			$this->modifiedColumns[] = PostPeer::CARMAKEID;
		}

		return $this;
	} // setCarmakeid()

	/**
	 * Set the value of [carmodelid] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setCarmodelid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->carmodelid !== $v) {
			$this->carmodelid = $v;
			$this->modifiedColumns[] = PostPeer::CARMODELID;
		}

		return $this;
	} // setCarmodelid()

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
	 * Set the value of [submitted] column.
	 * 
	 * @param      int $v new value
	 * @return     Post The current object (for fluent API support)
	 */
	public function setSubmitted($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->submitted !== $v) {
			$this->submitted = $v;
			$this->modifiedColumns[] = PostPeer::SUBMITTED;
		}

		return $this;
	} // setSubmitted()

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
			$this->title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->userid = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->pricefrom = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->priceto = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->yearfrom = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->yearto = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->carmakeid = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->carmodelid = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->transmission = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->tradein = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->comment = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->submitted = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 13; // 13 = PostPeer::NUM_HYDRATE_COLUMNS.

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
		if ($this->isColumnModified(PostPeer::TITLE)) {
			$modifiedColumns[':p' . $index++]  = '`TITLE`';
		}
		if ($this->isColumnModified(PostPeer::USERID)) {
			$modifiedColumns[':p' . $index++]  = '`USERID`';
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
		if ($this->isColumnModified(PostPeer::CARMAKEID)) {
			$modifiedColumns[':p' . $index++]  = '`CARMAKEID`';
		}
		if ($this->isColumnModified(PostPeer::CARMODELID)) {
			$modifiedColumns[':p' . $index++]  = '`CARMODELID`';
		}
		if ($this->isColumnModified(PostPeer::TRANSMISSION)) {
			$modifiedColumns[':p' . $index++]  = '`TRANSMISSION`';
		}
		if ($this->isColumnModified(PostPeer::TRADEIN)) {
			$modifiedColumns[':p' . $index++]  = '`TRADEIN`';
		}
		if ($this->isColumnModified(PostPeer::COMMENT)) {
			$modifiedColumns[':p' . $index++]  = '`COMMENT`';
		}
		if ($this->isColumnModified(PostPeer::SUBMITTED)) {
			$modifiedColumns[':p' . $index++]  = '`SUBMITTED`';
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
					case '`TITLE`':
						$stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
						break;
					case '`USERID`':
						$stmt->bindValue($identifier, $this->userid, PDO::PARAM_INT);
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
					case '`CARMAKEID`':
						$stmt->bindValue($identifier, $this->carmakeid, PDO::PARAM_INT);
						break;
					case '`CARMODELID`':
						$stmt->bindValue($identifier, $this->carmodelid, PDO::PARAM_INT);
						break;
					case '`TRANSMISSION`':
						$stmt->bindValue($identifier, $this->transmission, PDO::PARAM_STR);
						break;
					case '`TRADEIN`':
						$stmt->bindValue($identifier, $this->tradein, PDO::PARAM_INT);
						break;
					case '`COMMENT`':
						$stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
						break;
					case '`SUBMITTED`':
						$stmt->bindValue($identifier, $this->submitted, PDO::PARAM_INT);
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
				return $this->getTitle();
				break;
			case 2:
				return $this->getUserid();
				break;
			case 3:
				return $this->getPricefrom();
				break;
			case 4:
				return $this->getPriceto();
				break;
			case 5:
				return $this->getYearfrom();
				break;
			case 6:
				return $this->getYearto();
				break;
			case 7:
				return $this->getCarmakeid();
				break;
			case 8:
				return $this->getCarmodelid();
				break;
			case 9:
				return $this->getTransmission();
				break;
			case 10:
				return $this->getTradein();
				break;
			case 11:
				return $this->getComment();
				break;
			case 12:
				return $this->getSubmitted();
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
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['Post'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Post'][$this->getPrimaryKey()] = true;
		$keys = PostPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTitle(),
			$keys[2] => $this->getUserid(),
			$keys[3] => $this->getPricefrom(),
			$keys[4] => $this->getPriceto(),
			$keys[5] => $this->getYearfrom(),
			$keys[6] => $this->getYearto(),
			$keys[7] => $this->getCarmakeid(),
			$keys[8] => $this->getCarmodelid(),
			$keys[9] => $this->getTransmission(),
			$keys[10] => $this->getTradein(),
			$keys[11] => $this->getComment(),
			$keys[12] => $this->getSubmitted(),
		);
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
				$this->setTitle($value);
				break;
			case 2:
				$this->setUserid($value);
				break;
			case 3:
				$this->setPricefrom($value);
				break;
			case 4:
				$this->setPriceto($value);
				break;
			case 5:
				$this->setYearfrom($value);
				break;
			case 6:
				$this->setYearto($value);
				break;
			case 7:
				$this->setCarmakeid($value);
				break;
			case 8:
				$this->setCarmodelid($value);
				break;
			case 9:
				$this->setTransmission($value);
				break;
			case 10:
				$this->setTradein($value);
				break;
			case 11:
				$this->setComment($value);
				break;
			case 12:
				$this->setSubmitted($value);
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
		if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserid($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPricefrom($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPriceto($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setYearfrom($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setYearto($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCarmakeid($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCarmodelid($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTransmission($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTradein($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setComment($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setSubmitted($arr[$keys[12]]);
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
		if ($this->isColumnModified(PostPeer::TITLE)) $criteria->add(PostPeer::TITLE, $this->title);
		if ($this->isColumnModified(PostPeer::USERID)) $criteria->add(PostPeer::USERID, $this->userid);
		if ($this->isColumnModified(PostPeer::PRICEFROM)) $criteria->add(PostPeer::PRICEFROM, $this->pricefrom);
		if ($this->isColumnModified(PostPeer::PRICETO)) $criteria->add(PostPeer::PRICETO, $this->priceto);
		if ($this->isColumnModified(PostPeer::YEARFROM)) $criteria->add(PostPeer::YEARFROM, $this->yearfrom);
		if ($this->isColumnModified(PostPeer::YEARTO)) $criteria->add(PostPeer::YEARTO, $this->yearto);
		if ($this->isColumnModified(PostPeer::CARMAKEID)) $criteria->add(PostPeer::CARMAKEID, $this->carmakeid);
		if ($this->isColumnModified(PostPeer::CARMODELID)) $criteria->add(PostPeer::CARMODELID, $this->carmodelid);
		if ($this->isColumnModified(PostPeer::TRANSMISSION)) $criteria->add(PostPeer::TRANSMISSION, $this->transmission);
		if ($this->isColumnModified(PostPeer::TRADEIN)) $criteria->add(PostPeer::TRADEIN, $this->tradein);
		if ($this->isColumnModified(PostPeer::COMMENT)) $criteria->add(PostPeer::COMMENT, $this->comment);
		if ($this->isColumnModified(PostPeer::SUBMITTED)) $criteria->add(PostPeer::SUBMITTED, $this->submitted);

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
		$copyObj->setTitle($this->getTitle());
		$copyObj->setUserid($this->getUserid());
		$copyObj->setPricefrom($this->getPricefrom());
		$copyObj->setPriceto($this->getPriceto());
		$copyObj->setYearfrom($this->getYearfrom());
		$copyObj->setYearto($this->getYearto());
		$copyObj->setCarmakeid($this->getCarmakeid());
		$copyObj->setCarmodelid($this->getCarmodelid());
		$copyObj->setTransmission($this->getTransmission());
		$copyObj->setTradein($this->getTradein());
		$copyObj->setComment($this->getComment());
		$copyObj->setSubmitted($this->getSubmitted());
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
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->title = null;
		$this->userid = null;
		$this->pricefrom = null;
		$this->priceto = null;
		$this->yearfrom = null;
		$this->yearto = null;
		$this->carmakeid = null;
		$this->carmodelid = null;
		$this->transmission = null;
		$this->tradein = null;
		$this->comment = null;
		$this->submitted = null;
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
