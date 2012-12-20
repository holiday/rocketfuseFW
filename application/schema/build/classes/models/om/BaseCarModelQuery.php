<?php


/**
 * Base class that represents a query for the 'CarModels' table.
 *
 * 
 *
 * @method     CarModelQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CarModelQuery orderByMakeId($order = Criteria::ASC) Order by the make_id column
 * @method     CarModelQuery orderByModel($order = Criteria::ASC) Order by the model column
 *
 * @method     CarModelQuery groupById() Group by the id column
 * @method     CarModelQuery groupByMakeId() Group by the make_id column
 * @method     CarModelQuery groupByModel() Group by the model column
 *
 * @method     CarModelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CarModelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CarModelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CarModelQuery leftJoinCarMake($relationAlias = null) Adds a LEFT JOIN clause to the query using the CarMake relation
 * @method     CarModelQuery rightJoinCarMake($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CarMake relation
 * @method     CarModelQuery innerJoinCarMake($relationAlias = null) Adds a INNER JOIN clause to the query using the CarMake relation
 *
 * @method     CarModelQuery leftJoinPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the Post relation
 * @method     CarModelQuery rightJoinPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Post relation
 * @method     CarModelQuery innerJoinPost($relationAlias = null) Adds a INNER JOIN clause to the query using the Post relation
 *
 * @method     CarModel findOne(PropelPDO $con = null) Return the first CarModel matching the query
 * @method     CarModel findOneOrCreate(PropelPDO $con = null) Return the first CarModel matching the query, or a new CarModel object populated from the query conditions when no match is found
 *
 * @method     CarModel findOneById(int $id) Return the first CarModel filtered by the id column
 * @method     CarModel findOneByMakeId(int $make_id) Return the first CarModel filtered by the make_id column
 * @method     CarModel findOneByModel(string $model) Return the first CarModel filtered by the model column
 *
 * @method     array findById(int $id) Return CarModel objects filtered by the id column
 * @method     array findByMakeId(int $make_id) Return CarModel objects filtered by the make_id column
 * @method     array findByModel(string $model) Return CarModel objects filtered by the model column
 *
 * @package    propel.generator.models.om
 */
abstract class BaseCarModelQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseCarModelQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ready4car', $modelName = 'CarModel', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CarModelQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CarModelQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CarModelQuery) {
			return $criteria;
		}
		$query = new CarModelQuery();
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
	 * @return    CarModel|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = CarModelPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(CarModelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    CarModel A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `MAKE_ID`, `MODEL` FROM `CarModels` WHERE `ID` = :p0';
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
			$obj = new CarModel();
			$obj->hydrate($row);
			CarModelPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    CarModel|array|mixed the result, formatted by the current formatter
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
	 * @return    CarModelQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CarModelPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CarModelQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CarModelPeer::ID, $keys, Criteria::IN);
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
	 * @return    CarModelQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CarModelPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the make_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMakeId(1234); // WHERE make_id = 1234
	 * $query->filterByMakeId(array(12, 34)); // WHERE make_id IN (12, 34)
	 * $query->filterByMakeId(array('min' => 12)); // WHERE make_id > 12
	 * </code>
	 *
	 * @see       filterByCarMake()
	 *
	 * @param     mixed $makeId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CarModelQuery The current query, for fluid interface
	 */
	public function filterByMakeId($makeId = null, $comparison = null)
	{
		if (is_array($makeId)) {
			$useMinMax = false;
			if (isset($makeId['min'])) {
				$this->addUsingAlias(CarModelPeer::MAKE_ID, $makeId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($makeId['max'])) {
				$this->addUsingAlias(CarModelPeer::MAKE_ID, $makeId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CarModelPeer::MAKE_ID, $makeId, $comparison);
	}

	/**
	 * Filter the query on the model column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByModel('fooValue');   // WHERE model = 'fooValue'
	 * $query->filterByModel('%fooValue%'); // WHERE model LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $model The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CarModelQuery The current query, for fluid interface
	 */
	public function filterByModel($model = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($model)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $model)) {
				$model = str_replace('*', '%', $model);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CarModelPeer::MODEL, $model, $comparison);
	}

	/**
	 * Filter the query by a related CarMake object
	 *
	 * @param     CarMake|PropelCollection $carMake The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CarModelQuery The current query, for fluid interface
	 */
	public function filterByCarMake($carMake, $comparison = null)
	{
		if ($carMake instanceof CarMake) {
			return $this
				->addUsingAlias(CarModelPeer::MAKE_ID, $carMake->getId(), $comparison);
		} elseif ($carMake instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(CarModelPeer::MAKE_ID, $carMake->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByCarMake() only accepts arguments of type CarMake or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the CarMake relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CarModelQuery The current query, for fluid interface
	 */
	public function joinCarMake($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CarMake');

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
			$this->addJoinObject($join, 'CarMake');
		}

		return $this;
	}

	/**
	 * Use the CarMake relation CarMake object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CarMakeQuery A secondary query class using the current class as primary query
	 */
	public function useCarMakeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCarMake($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CarMake', 'CarMakeQuery');
	}

	/**
	 * Filter the query by a related Post object
	 *
	 * @param     Post $post  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CarModelQuery The current query, for fluid interface
	 */
	public function filterByPost($post, $comparison = null)
	{
		if ($post instanceof Post) {
			return $this
				->addUsingAlias(CarModelPeer::ID, $post->getCarModelId(), $comparison);
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
	 * @return    CarModelQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     CarModel $carModel Object to remove from the list of results
	 *
	 * @return    CarModelQuery The current query, for fluid interface
	 */
	public function prune($carModel = null)
	{
		if ($carModel) {
			$this->addUsingAlias(CarModelPeer::ID, $carModel->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseCarModelQuery