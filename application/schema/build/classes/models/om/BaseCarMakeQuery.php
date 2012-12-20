<?php


/**
 * Base class that represents a query for the 'CarMakes' table.
 *
 * 
 *
 * @method     CarMakeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CarMakeQuery orderByMake($order = Criteria::ASC) Order by the make column
 *
 * @method     CarMakeQuery groupById() Group by the id column
 * @method     CarMakeQuery groupByMake() Group by the make column
 *
 * @method     CarMakeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CarMakeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CarMakeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CarMakeQuery leftJoinPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the Post relation
 * @method     CarMakeQuery rightJoinPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Post relation
 * @method     CarMakeQuery innerJoinPost($relationAlias = null) Adds a INNER JOIN clause to the query using the Post relation
 *
 * @method     CarMakeQuery leftJoinCarModel($relationAlias = null) Adds a LEFT JOIN clause to the query using the CarModel relation
 * @method     CarMakeQuery rightJoinCarModel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CarModel relation
 * @method     CarMakeQuery innerJoinCarModel($relationAlias = null) Adds a INNER JOIN clause to the query using the CarModel relation
 *
 * @method     CarMake findOne(PropelPDO $con = null) Return the first CarMake matching the query
 * @method     CarMake findOneOrCreate(PropelPDO $con = null) Return the first CarMake matching the query, or a new CarMake object populated from the query conditions when no match is found
 *
 * @method     CarMake findOneById(int $id) Return the first CarMake filtered by the id column
 * @method     CarMake findOneByMake(string $make) Return the first CarMake filtered by the make column
 *
 * @method     array findById(int $id) Return CarMake objects filtered by the id column
 * @method     array findByMake(string $make) Return CarMake objects filtered by the make column
 *
 * @package    propel.generator.models.om
 */
abstract class BaseCarMakeQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseCarMakeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ready4car', $modelName = 'CarMake', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CarMakeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CarMakeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CarMakeQuery) {
			return $criteria;
		}
		$query = new CarMakeQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    CarMake|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = CarMakePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(CarMakePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    CarMake A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `MAKE` FROM `CarMakes` WHERE `ID` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new CarMake();
			$obj->hydrate($row);
			CarMakePeer::addInstanceToPool($obj, (string) $row[0]);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    CarMake|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    CarMakeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CarMakePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CarMakeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CarMakePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CarMakeQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CarMakePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the make column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMake('fooValue');   // WHERE make = 'fooValue'
	 * $query->filterByMake('%fooValue%'); // WHERE make LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $make The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CarMakeQuery The current query, for fluid interface
	 */
	public function filterByMake($make = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($make)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $make)) {
				$make = str_replace('*', '%', $make);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CarMakePeer::MAKE, $make, $comparison);
	}

	/**
	 * Filter the query by a related Post object
	 *
	 * @param     Post $post  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CarMakeQuery The current query, for fluid interface
	 */
	public function filterByPost($post, $comparison = null)
	{
		if ($post instanceof Post) {
			return $this
				->addUsingAlias(CarMakePeer::ID, $post->getCarMakeId(), $comparison);
		} elseif ($post instanceof PropelCollection) {
			return $this
				->usePostQuery()
				->filterByPrimaryKeys($post->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByPost() only accepts arguments of type Post or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Post relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CarMakeQuery The current query, for fluid interface
	 */
	public function joinPost($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Post');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Post');
		}

		return $this;
	}

	/**
	 * Use the Post relation Post object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PostQuery A secondary query class using the current class as primary query
	 */
	public function usePostQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Post', 'PostQuery');
	}

	/**
	 * Filter the query by a related CarModel object
	 *
	 * @param     CarModel $carModel  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CarMakeQuery The current query, for fluid interface
	 */
	public function filterByCarModel($carModel, $comparison = null)
	{
		if ($carModel instanceof CarModel) {
			return $this
				->addUsingAlias(CarMakePeer::ID, $carModel->getMakeId(), $comparison);
		} elseif ($carModel instanceof PropelCollection) {
			return $this
				->useCarModelQuery()
				->filterByPrimaryKeys($carModel->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByCarModel() only accepts arguments of type CarModel or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the CarModel relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CarMakeQuery The current query, for fluid interface
	 */
	public function joinCarModel($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CarModel');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'CarModel');
		}

		return $this;
	}

	/**
	 * Use the CarModel relation CarModel object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CarModelQuery A secondary query class using the current class as primary query
	 */
	public function useCarModelQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCarModel($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CarModel', 'CarModelQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CarMake $carMake Object to remove from the list of results
	 *
	 * @return    CarMakeQuery The current query, for fluid interface
	 */
	public function prune($carMake = null)
	{
		if ($carMake) {
			$this->addUsingAlias(CarMakePeer::ID, $carMake->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseCarMakeQuery