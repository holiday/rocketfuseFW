<?php


/**
 * Base class that represents a query for the 'Posts' table.
 *
 * 
 *
 * @method     PostQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PostQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     PostQuery orderByUserid($order = Criteria::ASC) Order by the userId column
 * @method     PostQuery orderByPricefrom($order = Criteria::ASC) Order by the priceFrom column
 * @method     PostQuery orderByPriceto($order = Criteria::ASC) Order by the priceTo column
 * @method     PostQuery orderByYearfrom($order = Criteria::ASC) Order by the yearFrom column
 * @method     PostQuery orderByYearto($order = Criteria::ASC) Order by the yearTo column
 * @method     PostQuery orderByCarmakeid($order = Criteria::ASC) Order by the carMakeId column
 * @method     PostQuery orderByCarmodelid($order = Criteria::ASC) Order by the carModelId column
 * @method     PostQuery orderByTransmission($order = Criteria::ASC) Order by the transmission column
 * @method     PostQuery orderByTradein($order = Criteria::ASC) Order by the tradein column
 * @method     PostQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     PostQuery orderBySubmitted($order = Criteria::ASC) Order by the submitted column
 *
 * @method     PostQuery groupById() Group by the id column
 * @method     PostQuery groupByTitle() Group by the title column
 * @method     PostQuery groupByUserid() Group by the userId column
 * @method     PostQuery groupByPricefrom() Group by the priceFrom column
 * @method     PostQuery groupByPriceto() Group by the priceTo column
 * @method     PostQuery groupByYearfrom() Group by the yearFrom column
 * @method     PostQuery groupByYearto() Group by the yearTo column
 * @method     PostQuery groupByCarmakeid() Group by the carMakeId column
 * @method     PostQuery groupByCarmodelid() Group by the carModelId column
 * @method     PostQuery groupByTransmission() Group by the transmission column
 * @method     PostQuery groupByTradein() Group by the tradein column
 * @method     PostQuery groupByComment() Group by the comment column
 * @method     PostQuery groupBySubmitted() Group by the submitted column
 *
 * @method     PostQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PostQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PostQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Post findOne(PropelPDO $con = null) Return the first Post matching the query
 * @method     Post findOneOrCreate(PropelPDO $con = null) Return the first Post matching the query, or a new Post object populated from the query conditions when no match is found
 *
 * @method     Post findOneById(int $id) Return the first Post filtered by the id column
 * @method     Post findOneByTitle(string $title) Return the first Post filtered by the title column
 * @method     Post findOneByUserid(int $userId) Return the first Post filtered by the userId column
 * @method     Post findOneByPricefrom(int $priceFrom) Return the first Post filtered by the priceFrom column
 * @method     Post findOneByPriceto(int $priceTo) Return the first Post filtered by the priceTo column
 * @method     Post findOneByYearfrom(int $yearFrom) Return the first Post filtered by the yearFrom column
 * @method     Post findOneByYearto(int $yearTo) Return the first Post filtered by the yearTo column
 * @method     Post findOneByCarmakeid(int $carMakeId) Return the first Post filtered by the carMakeId column
 * @method     Post findOneByCarmodelid(int $carModelId) Return the first Post filtered by the carModelId column
 * @method     Post findOneByTransmission(string $transmission) Return the first Post filtered by the transmission column
 * @method     Post findOneByTradein(int $tradein) Return the first Post filtered by the tradein column
 * @method     Post findOneByComment(string $comment) Return the first Post filtered by the comment column
 * @method     Post findOneBySubmitted(int $submitted) Return the first Post filtered by the submitted column
 *
 * @method     array findById(int $id) Return Post objects filtered by the id column
 * @method     array findByTitle(string $title) Return Post objects filtered by the title column
 * @method     array findByUserid(int $userId) Return Post objects filtered by the userId column
 * @method     array findByPricefrom(int $priceFrom) Return Post objects filtered by the priceFrom column
 * @method     array findByPriceto(int $priceTo) Return Post objects filtered by the priceTo column
 * @method     array findByYearfrom(int $yearFrom) Return Post objects filtered by the yearFrom column
 * @method     array findByYearto(int $yearTo) Return Post objects filtered by the yearTo column
 * @method     array findByCarmakeid(int $carMakeId) Return Post objects filtered by the carMakeId column
 * @method     array findByCarmodelid(int $carModelId) Return Post objects filtered by the carModelId column
 * @method     array findByTransmission(string $transmission) Return Post objects filtered by the transmission column
 * @method     array findByTradein(int $tradein) Return Post objects filtered by the tradein column
 * @method     array findByComment(string $comment) Return Post objects filtered by the comment column
 * @method     array findBySubmitted(int $submitted) Return Post objects filtered by the submitted column
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
		$sql = 'SELECT `ID`, `TITLE`, `USERID`, `PRICEFROM`, `PRICETO`, `YEARFROM`, `YEARTO`, `CARMAKEID`, `CARMODELID`, `TRANSMISSION`, `TRADEIN`, `COMMENT`, `SUBMITTED` FROM `Posts` WHERE `ID` = :p0';
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
	 * Filter the query on the title column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
	 * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $title The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PostPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the userId column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserid(1234); // WHERE userId = 1234
	 * $query->filterByUserid(array(12, 34)); // WHERE userId IN (12, 34)
	 * $query->filterByUserid(array('min' => 12)); // WHERE userId > 12
	 * </code>
	 *
	 * @param     mixed $userid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByUserid($userid = null, $comparison = null)
	{
		if (is_array($userid)) {
			$useMinMax = false;
			if (isset($userid['min'])) {
				$this->addUsingAlias(PostPeer::USERID, $userid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userid['max'])) {
				$this->addUsingAlias(PostPeer::USERID, $userid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::USERID, $userid, $comparison);
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
	 * Filter the query on the carMakeId column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCarmakeid(1234); // WHERE carMakeId = 1234
	 * $query->filterByCarmakeid(array(12, 34)); // WHERE carMakeId IN (12, 34)
	 * $query->filterByCarmakeid(array('min' => 12)); // WHERE carMakeId > 12
	 * </code>
	 *
	 * @param     mixed $carmakeid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByCarmakeid($carmakeid = null, $comparison = null)
	{
		if (is_array($carmakeid)) {
			$useMinMax = false;
			if (isset($carmakeid['min'])) {
				$this->addUsingAlias(PostPeer::CARMAKEID, $carmakeid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($carmakeid['max'])) {
				$this->addUsingAlias(PostPeer::CARMAKEID, $carmakeid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::CARMAKEID, $carmakeid, $comparison);
	}

	/**
	 * Filter the query on the carModelId column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCarmodelid(1234); // WHERE carModelId = 1234
	 * $query->filterByCarmodelid(array(12, 34)); // WHERE carModelId IN (12, 34)
	 * $query->filterByCarmodelid(array('min' => 12)); // WHERE carModelId > 12
	 * </code>
	 *
	 * @param     mixed $carmodelid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByCarmodelid($carmodelid = null, $comparison = null)
	{
		if (is_array($carmodelid)) {
			$useMinMax = false;
			if (isset($carmodelid['min'])) {
				$this->addUsingAlias(PostPeer::CARMODELID, $carmodelid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($carmodelid['max'])) {
				$this->addUsingAlias(PostPeer::CARMODELID, $carmodelid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::CARMODELID, $carmodelid, $comparison);
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
	 * Filter the query on the tradein column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTradein(1234); // WHERE tradein = 1234
	 * $query->filterByTradein(array(12, 34)); // WHERE tradein IN (12, 34)
	 * $query->filterByTradein(array('min' => 12)); // WHERE tradein > 12
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
	 * Filter the query on the submitted column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySubmitted(1234); // WHERE submitted = 1234
	 * $query->filterBySubmitted(array(12, 34)); // WHERE submitted IN (12, 34)
	 * $query->filterBySubmitted(array('min' => 12)); // WHERE submitted > 12
	 * </code>
	 *
	 * @param     mixed $submitted The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterBySubmitted($submitted = null, $comparison = null)
	{
		if (is_array($submitted)) {
			$useMinMax = false;
			if (isset($submitted['min'])) {
				$this->addUsingAlias(PostPeer::SUBMITTED, $submitted['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($submitted['max'])) {
				$this->addUsingAlias(PostPeer::SUBMITTED, $submitted['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::SUBMITTED, $submitted, $comparison);
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