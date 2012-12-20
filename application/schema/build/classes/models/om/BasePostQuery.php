<?php


/**
 * Base class that represents a query for the 'Posts' table.
 *
 * 
 *
 * @method     PostQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PostQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     PostQuery orderByPricefrom($order = Criteria::ASC) Order by the priceFrom column
 * @method     PostQuery orderByPriceto($order = Criteria::ASC) Order by the priceTo column
 * @method     PostQuery orderByYearfrom($order = Criteria::ASC) Order by the yearFrom column
 * @method     PostQuery orderByYearto($order = Criteria::ASC) Order by the yearTo column
 * @method     PostQuery orderByCarMakeId($order = Criteria::ASC) Order by the car_make_id column
 * @method     PostQuery orderByCarModelId($order = Criteria::ASC) Order by the car_model_id column
 * @method     PostQuery orderByTransmission($order = Criteria::ASC) Order by the transmission column
 * @method     PostQuery orderByTradein($order = Criteria::ASC) Order by the tradeIn column
 * @method     PostQuery orderByPosttype($order = Criteria::ASC) Order by the postType column
 * @method     PostQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     PostQuery orderByDatesubmitted($order = Criteria::ASC) Order by the dateSubmitted column
 * @method     PostQuery orderByActivation($order = Criteria::ASC) Order by the activation column
 * @method     PostQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     PostQuery groupById() Group by the id column
 * @method     PostQuery groupByUserId() Group by the user_id column
 * @method     PostQuery groupByPricefrom() Group by the priceFrom column
 * @method     PostQuery groupByPriceto() Group by the priceTo column
 * @method     PostQuery groupByYearfrom() Group by the yearFrom column
 * @method     PostQuery groupByYearto() Group by the yearTo column
 * @method     PostQuery groupByCarMakeId() Group by the car_make_id column
 * @method     PostQuery groupByCarModelId() Group by the car_model_id column
 * @method     PostQuery groupByTransmission() Group by the transmission column
 * @method     PostQuery groupByTradein() Group by the tradeIn column
 * @method     PostQuery groupByPosttype() Group by the postType column
 * @method     PostQuery groupByComment() Group by the comment column
 * @method     PostQuery groupByDatesubmitted() Group by the dateSubmitted column
 * @method     PostQuery groupByActivation() Group by the activation column
 * @method     PostQuery groupByActive() Group by the active column
 *
 * @method     PostQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PostQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PostQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PostQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     PostQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     PostQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     PostQuery leftJoinCarMake($relationAlias = null) Adds a LEFT JOIN clause to the query using the CarMake relation
 * @method     PostQuery rightJoinCarMake($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CarMake relation
 * @method     PostQuery innerJoinCarMake($relationAlias = null) Adds a INNER JOIN clause to the query using the CarMake relation
 *
 * @method     PostQuery leftJoinCarModel($relationAlias = null) Adds a LEFT JOIN clause to the query using the CarModel relation
 * @method     PostQuery rightJoinCarModel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CarModel relation
 * @method     PostQuery innerJoinCarModel($relationAlias = null) Adds a INNER JOIN clause to the query using the CarModel relation
 *
 * @method     Post findOne(PropelPDO $con = null) Return the first Post matching the query
 * @method     Post findOneOrCreate(PropelPDO $con = null) Return the first Post matching the query, or a new Post object populated from the query conditions when no match is found
 *
 * @method     Post findOneById(int $id) Return the first Post filtered by the id column
 * @method     Post findOneByUserId(int $user_id) Return the first Post filtered by the user_id column
 * @method     Post findOneByPricefrom(int $priceFrom) Return the first Post filtered by the priceFrom column
 * @method     Post findOneByPriceto(int $priceTo) Return the first Post filtered by the priceTo column
 * @method     Post findOneByYearfrom(int $yearFrom) Return the first Post filtered by the yearFrom column
 * @method     Post findOneByYearto(int $yearTo) Return the first Post filtered by the yearTo column
 * @method     Post findOneByCarMakeId(int $car_make_id) Return the first Post filtered by the car_make_id column
 * @method     Post findOneByCarModelId(int $car_model_id) Return the first Post filtered by the car_model_id column
 * @method     Post findOneByTransmission(string $transmission) Return the first Post filtered by the transmission column
 * @method     Post findOneByTradein(int $tradeIn) Return the first Post filtered by the tradeIn column
 * @method     Post findOneByPosttype(string $postType) Return the first Post filtered by the postType column
 * @method     Post findOneByComment(string $comment) Return the first Post filtered by the comment column
 * @method     Post findOneByDatesubmitted(int $dateSubmitted) Return the first Post filtered by the dateSubmitted column
 * @method     Post findOneByActivation(string $activation) Return the first Post filtered by the activation column
 * @method     Post findOneByActive(boolean $active) Return the first Post filtered by the active column
 *
 * @method     array findById(int $id) Return Post objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return Post objects filtered by the user_id column
 * @method     array findByPricefrom(int $priceFrom) Return Post objects filtered by the priceFrom column
 * @method     array findByPriceto(int $priceTo) Return Post objects filtered by the priceTo column
 * @method     array findByYearfrom(int $yearFrom) Return Post objects filtered by the yearFrom column
 * @method     array findByYearto(int $yearTo) Return Post objects filtered by the yearTo column
 * @method     array findByCarMakeId(int $car_make_id) Return Post objects filtered by the car_make_id column
 * @method     array findByCarModelId(int $car_model_id) Return Post objects filtered by the car_model_id column
 * @method     array findByTransmission(string $transmission) Return Post objects filtered by the transmission column
 * @method     array findByTradein(int $tradeIn) Return Post objects filtered by the tradeIn column
 * @method     array findByPosttype(string $postType) Return Post objects filtered by the postType column
 * @method     array findByComment(string $comment) Return Post objects filtered by the comment column
 * @method     array findByDatesubmitted(int $dateSubmitted) Return Post objects filtered by the dateSubmitted column
 * @method     array findByActivation(string $activation) Return Post objects filtered by the activation column
 * @method     array findByActive(boolean $active) Return Post objects filtered by the active column
 *
 * @package    propel.generator.models.om
 */
abstract class BasePostQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BasePostQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ready4car', $modelName = 'Post', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PostQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PostQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PostQuery) {
			return $criteria;
		}
		$query = new PostQuery();
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
	 * @return    Post|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = PostPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(PostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Post A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `USER_ID`, `PRICEFROM`, `PRICETO`, `YEARFROM`, `YEARTO`, `CAR_MAKE_ID`, `CAR_MODEL_ID`, `TRANSMISSION`, `TRADEIN`, `POSTTYPE`, `COMMENT`, `DATESUBMITTED`, `ACTIVATION`, `ACTIVE` FROM `Posts` WHERE `ID` = :p0';
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
			$obj = new Post();
			$obj->hydrate($row);
			PostPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Post|array|mixed the result, formatted by the current formatter
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
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PostPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PostPeer::ID, $keys, Criteria::IN);
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
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PostPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserId(1234); // WHERE user_id = 1234
	 * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
	 * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
	 * </code>
	 *
	 * @see       filterByUser()
	 *
	 * @param     mixed $userId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(PostPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(PostPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the priceFrom column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPricefrom(1234); // WHERE priceFrom = 1234
	 * $query->filterByPricefrom(array(12, 34)); // WHERE priceFrom IN (12, 34)
	 * $query->filterByPricefrom(array('min' => 12)); // WHERE priceFrom > 12
	 * </code>
	 *
	 * @param     mixed $pricefrom The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByPricefrom($pricefrom = null, $comparison = null)
	{
		if (is_array($pricefrom)) {
			$useMinMax = false;
			if (isset($pricefrom['min'])) {
				$this->addUsingAlias(PostPeer::PRICEFROM, $pricefrom['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($pricefrom['max'])) {
				$this->addUsingAlias(PostPeer::PRICEFROM, $pricefrom['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::PRICEFROM, $pricefrom, $comparison);
	}

	/**
	 * Filter the query on the priceTo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPriceto(1234); // WHERE priceTo = 1234
	 * $query->filterByPriceto(array(12, 34)); // WHERE priceTo IN (12, 34)
	 * $query->filterByPriceto(array('min' => 12)); // WHERE priceTo > 12
	 * </code>
	 *
	 * @param     mixed $priceto The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByPriceto($priceto = null, $comparison = null)
	{
		if (is_array($priceto)) {
			$useMinMax = false;
			if (isset($priceto['min'])) {
				$this->addUsingAlias(PostPeer::PRICETO, $priceto['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($priceto['max'])) {
				$this->addUsingAlias(PostPeer::PRICETO, $priceto['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::PRICETO, $priceto, $comparison);
	}

	/**
	 * Filter the query on the yearFrom column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByYearfrom(1234); // WHERE yearFrom = 1234
	 * $query->filterByYearfrom(array(12, 34)); // WHERE yearFrom IN (12, 34)
	 * $query->filterByYearfrom(array('min' => 12)); // WHERE yearFrom > 12
	 * </code>
	 *
	 * @param     mixed $yearfrom The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByYearfrom($yearfrom = null, $comparison = null)
	{
		if (is_array($yearfrom)) {
			$useMinMax = false;
			if (isset($yearfrom['min'])) {
				$this->addUsingAlias(PostPeer::YEARFROM, $yearfrom['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($yearfrom['max'])) {
				$this->addUsingAlias(PostPeer::YEARFROM, $yearfrom['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::YEARFROM, $yearfrom, $comparison);
	}

	/**
	 * Filter the query on the yearTo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByYearto(1234); // WHERE yearTo = 1234
	 * $query->filterByYearto(array(12, 34)); // WHERE yearTo IN (12, 34)
	 * $query->filterByYearto(array('min' => 12)); // WHERE yearTo > 12
	 * </code>
	 *
	 * @param     mixed $yearto The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByYearto($yearto = null, $comparison = null)
	{
		if (is_array($yearto)) {
			$useMinMax = false;
			if (isset($yearto['min'])) {
				$this->addUsingAlias(PostPeer::YEARTO, $yearto['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($yearto['max'])) {
				$this->addUsingAlias(PostPeer::YEARTO, $yearto['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::YEARTO, $yearto, $comparison);
	}

	/**
	 * Filter the query on the car_make_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCarMakeId(1234); // WHERE car_make_id = 1234
	 * $query->filterByCarMakeId(array(12, 34)); // WHERE car_make_id IN (12, 34)
	 * $query->filterByCarMakeId(array('min' => 12)); // WHERE car_make_id > 12
	 * </code>
	 *
	 * @see       filterByCarMake()
	 *
	 * @param     mixed $carMakeId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByCarMakeId($carMakeId = null, $comparison = null)
	{
		if (is_array($carMakeId)) {
			$useMinMax = false;
			if (isset($carMakeId['min'])) {
				$this->addUsingAlias(PostPeer::CAR_MAKE_ID, $carMakeId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($carMakeId['max'])) {
				$this->addUsingAlias(PostPeer::CAR_MAKE_ID, $carMakeId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::CAR_MAKE_ID, $carMakeId, $comparison);
	}

	/**
	 * Filter the query on the car_model_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCarModelId(1234); // WHERE car_model_id = 1234
	 * $query->filterByCarModelId(array(12, 34)); // WHERE car_model_id IN (12, 34)
	 * $query->filterByCarModelId(array('min' => 12)); // WHERE car_model_id > 12
	 * </code>
	 *
	 * @see       filterByCarModel()
	 *
	 * @param     mixed $carModelId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByCarModelId($carModelId = null, $comparison = null)
	{
		if (is_array($carModelId)) {
			$useMinMax = false;
			if (isset($carModelId['min'])) {
				$this->addUsingAlias(PostPeer::CAR_MODEL_ID, $carModelId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($carModelId['max'])) {
				$this->addUsingAlias(PostPeer::CAR_MODEL_ID, $carModelId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::CAR_MODEL_ID, $carModelId, $comparison);
	}

	/**
	 * Filter the query on the transmission column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTransmission('fooValue');   // WHERE transmission = 'fooValue'
	 * $query->filterByTransmission('%fooValue%'); // WHERE transmission LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $transmission The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByTransmission($transmission = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($transmission)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $transmission)) {
				$transmission = str_replace('*', '%', $transmission);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PostPeer::TRANSMISSION, $transmission, $comparison);
	}

	/**
	 * Filter the query on the tradeIn column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTradein(1234); // WHERE tradeIn = 1234
	 * $query->filterByTradein(array(12, 34)); // WHERE tradeIn IN (12, 34)
	 * $query->filterByTradein(array('min' => 12)); // WHERE tradeIn > 12
	 * </code>
	 *
	 * @param     mixed $tradein The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByTradein($tradein = null, $comparison = null)
	{
		if (is_array($tradein)) {
			$useMinMax = false;
			if (isset($tradein['min'])) {
				$this->addUsingAlias(PostPeer::TRADEIN, $tradein['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tradein['max'])) {
				$this->addUsingAlias(PostPeer::TRADEIN, $tradein['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::TRADEIN, $tradein, $comparison);
	}

	/**
	 * Filter the query on the postType column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPosttype('fooValue');   // WHERE postType = 'fooValue'
	 * $query->filterByPosttype('%fooValue%'); // WHERE postType LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $posttype The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByPosttype($posttype = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($posttype)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $posttype)) {
				$posttype = str_replace('*', '%', $posttype);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PostPeer::POSTTYPE, $posttype, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByComment('fooValue');   // WHERE comment = 'fooValue'
	 * $query->filterByComment('%fooValue%'); // WHERE comment LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $comment The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByComment($comment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comment)) {
				$comment = str_replace('*', '%', $comment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PostPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the dateSubmitted column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDatesubmitted(1234); // WHERE dateSubmitted = 1234
	 * $query->filterByDatesubmitted(array(12, 34)); // WHERE dateSubmitted IN (12, 34)
	 * $query->filterByDatesubmitted(array('min' => 12)); // WHERE dateSubmitted > 12
	 * </code>
	 *
	 * @param     mixed $datesubmitted The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByDatesubmitted($datesubmitted = null, $comparison = null)
	{
		if (is_array($datesubmitted)) {
			$useMinMax = false;
			if (isset($datesubmitted['min'])) {
				$this->addUsingAlias(PostPeer::DATESUBMITTED, $datesubmitted['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($datesubmitted['max'])) {
				$this->addUsingAlias(PostPeer::DATESUBMITTED, $datesubmitted['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::DATESUBMITTED, $datesubmitted, $comparison);
	}

	/**
	 * Filter the query on the activation column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActivation('fooValue');   // WHERE activation = 'fooValue'
	 * $query->filterByActivation('%fooValue%'); // WHERE activation LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $activation The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByActivation($activation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($activation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $activation)) {
				$activation = str_replace('*', '%', $activation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PostPeer::ACTIVATION, $activation, $comparison);
	}

	/**
	 * Filter the query on the active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActive(true); // WHERE active = true
	 * $query->filterByActive('yes'); // WHERE active = true
	 * </code>
	 *
	 * @param     boolean|string $active The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(PostPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User|PropelCollection $user The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		if ($user instanceof User) {
			return $this
				->addUsingAlias(PostPeer::USER_ID, $user->getId(), $comparison);
		} elseif ($user instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PostPeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('User');

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
			$this->addJoinObject($join, 'User');
		}

		return $this;
	}

	/**
	 * Use the User relation User object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
	}

	/**
	 * Filter the query by a related CarMake object
	 *
	 * @param     CarMake|PropelCollection $carMake The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByCarMake($carMake, $comparison = null)
	{
		if ($carMake instanceof CarMake) {
			return $this
				->addUsingAlias(PostPeer::CAR_MAKE_ID, $carMake->getId(), $comparison);
		} elseif ($carMake instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PostPeer::CAR_MAKE_ID, $carMake->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    PostQuery The current query, for fluid interface
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
	 * Filter the query by a related CarModel object
	 *
	 * @param     CarModel|PropelCollection $carModel The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByCarModel($carModel, $comparison = null)
	{
		if ($carModel instanceof CarModel) {
			return $this
				->addUsingAlias(PostPeer::CAR_MODEL_ID, $carModel->getId(), $comparison);
		} elseif ($carModel instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(PostPeer::CAR_MODEL_ID, $carModel->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    PostQuery The current query, for fluid interface
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
	 * @param     Post $post Object to remove from the list of results
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function prune($post = null)
	{
		if ($post) {
			$this->addUsingAlias(PostPeer::ID, $post->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BasePostQuery