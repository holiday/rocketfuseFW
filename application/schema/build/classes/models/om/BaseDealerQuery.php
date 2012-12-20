<?php


/**
 * Base class that represents a query for the 'Dealers' table.
 *
 * 
 *
 * @method     DealerQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealerQuery orderByShopname($order = Criteria::ASC) Order by the shopName column
 * @method     DealerQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     DealerQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     DealerQuery orderByClearance($order = Criteria::ASC) Order by the clearance column
 * @method     DealerQuery orderByStreetname($order = Criteria::ASC) Order by the streetName column
 * @method     DealerQuery orderByStreetnumber($order = Criteria::ASC) Order by the streetNumber column
 * @method     DealerQuery orderByPostal($order = Criteria::ASC) Order by the postal column
 * @method     DealerQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     DealerQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     DealerQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     DealerQuery orderByWebsite($order = Criteria::ASC) Order by the website column
 *
 * @method     DealerQuery groupById() Group by the id column
 * @method     DealerQuery groupByShopname() Group by the shopName column
 * @method     DealerQuery groupByEmail() Group by the email column
 * @method     DealerQuery groupByPassword() Group by the password column
 * @method     DealerQuery groupByClearance() Group by the clearance column
 * @method     DealerQuery groupByStreetname() Group by the streetName column
 * @method     DealerQuery groupByStreetnumber() Group by the streetNumber column
 * @method     DealerQuery groupByPostal() Group by the postal column
 * @method     DealerQuery groupByCity() Group by the city column
 * @method     DealerQuery groupByPhone() Group by the phone column
 * @method     DealerQuery groupByFax() Group by the fax column
 * @method     DealerQuery groupByWebsite() Group by the website column
 *
 * @method     DealerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Dealer findOne(PropelPDO $con = null) Return the first Dealer matching the query
 * @method     Dealer findOneOrCreate(PropelPDO $con = null) Return the first Dealer matching the query, or a new Dealer object populated from the query conditions when no match is found
 *
 * @method     Dealer findOneById(int $id) Return the first Dealer filtered by the id column
 * @method     Dealer findOneByShopname(string $shopName) Return the first Dealer filtered by the shopName column
 * @method     Dealer findOneByEmail(string $email) Return the first Dealer filtered by the email column
 * @method     Dealer findOneByPassword(string $password) Return the first Dealer filtered by the password column
 * @method     Dealer findOneByClearance(int $clearance) Return the first Dealer filtered by the clearance column
 * @method     Dealer findOneByStreetname(string $streetName) Return the first Dealer filtered by the streetName column
 * @method     Dealer findOneByStreetnumber(string $streetNumber) Return the first Dealer filtered by the streetNumber column
 * @method     Dealer findOneByPostal(string $postal) Return the first Dealer filtered by the postal column
 * @method     Dealer findOneByCity(string $city) Return the first Dealer filtered by the city column
 * @method     Dealer findOneByPhone(string $phone) Return the first Dealer filtered by the phone column
 * @method     Dealer findOneByFax(string $fax) Return the first Dealer filtered by the fax column
 * @method     Dealer findOneByWebsite(string $website) Return the first Dealer filtered by the website column
 *
 * @method     array findById(int $id) Return Dealer objects filtered by the id column
 * @method     array findByShopname(string $shopName) Return Dealer objects filtered by the shopName column
 * @method     array findByEmail(string $email) Return Dealer objects filtered by the email column
 * @method     array findByPassword(string $password) Return Dealer objects filtered by the password column
 * @method     array findByClearance(int $clearance) Return Dealer objects filtered by the clearance column
 * @method     array findByStreetname(string $streetName) Return Dealer objects filtered by the streetName column
 * @method     array findByStreetnumber(string $streetNumber) Return Dealer objects filtered by the streetNumber column
 * @method     array findByPostal(string $postal) Return Dealer objects filtered by the postal column
 * @method     array findByCity(string $city) Return Dealer objects filtered by the city column
 * @method     array findByPhone(string $phone) Return Dealer objects filtered by the phone column
 * @method     array findByFax(string $fax) Return Dealer objects filtered by the fax column
 * @method     array findByWebsite(string $website) Return Dealer objects filtered by the website column
 *
 * @package    propel.generator.models.om
 */
abstract class BaseDealerQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseDealerQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'ready4car', $modelName = 'Dealer', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealerQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealerQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealerQuery) {
			return $criteria;
		}
		$query = new DealerQuery();
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
	 * @return    Dealer|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = DealerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(DealerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Dealer A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `SHOPNAME`, `EMAIL`, `PASSWORD`, `CLEARANCE`, `STREETNAME`, `STREETNUMBER`, `POSTAL`, `CITY`, `PHONE`, `FAX`, `WEBSITE` FROM `Dealers` WHERE `ID` = :p0';
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
			$obj = new Dealer();
			$obj->hydrate($row);
			DealerPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Dealer|array|mixed the result, formatted by the current formatter
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
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealerPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealerPeer::ID, $keys, Criteria::IN);
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
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealerPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the shopName column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShopname('fooValue');   // WHERE shopName = 'fooValue'
	 * $query->filterByShopname('%fooValue%'); // WHERE shopName LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $shopname The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByShopname($shopname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($shopname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $shopname)) {
				$shopname = str_replace('*', '%', $shopname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::SHOPNAME, $shopname, $comparison);
	}

	/**
	 * Filter the query on the email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the password column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
	 * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $password The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByPassword($password = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($password)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $password)) {
				$password = str_replace('*', '%', $password);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::PASSWORD, $password, $comparison);
	}

	/**
	 * Filter the query on the clearance column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByClearance(1234); // WHERE clearance = 1234
	 * $query->filterByClearance(array(12, 34)); // WHERE clearance IN (12, 34)
	 * $query->filterByClearance(array('min' => 12)); // WHERE clearance > 12
	 * </code>
	 *
	 * @param     mixed $clearance The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByClearance($clearance = null, $comparison = null)
	{
		if (is_array($clearance)) {
			$useMinMax = false;
			if (isset($clearance['min'])) {
				$this->addUsingAlias(DealerPeer::CLEARANCE, $clearance['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($clearance['max'])) {
				$this->addUsingAlias(DealerPeer::CLEARANCE, $clearance['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealerPeer::CLEARANCE, $clearance, $comparison);
	}

	/**
	 * Filter the query on the streetName column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStreetname('fooValue');   // WHERE streetName = 'fooValue'
	 * $query->filterByStreetname('%fooValue%'); // WHERE streetName LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $streetname The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByStreetname($streetname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($streetname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $streetname)) {
				$streetname = str_replace('*', '%', $streetname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::STREETNAME, $streetname, $comparison);
	}

	/**
	 * Filter the query on the streetNumber column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStreetnumber('fooValue');   // WHERE streetNumber = 'fooValue'
	 * $query->filterByStreetnumber('%fooValue%'); // WHERE streetNumber LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $streetnumber The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByStreetnumber($streetnumber = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($streetnumber)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $streetnumber)) {
				$streetnumber = str_replace('*', '%', $streetnumber);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::STREETNUMBER, $streetnumber, $comparison);
	}

	/**
	 * Filter the query on the postal column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPostal('fooValue');   // WHERE postal = 'fooValue'
	 * $query->filterByPostal('%fooValue%'); // WHERE postal LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $postal The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByPostal($postal = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postal)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postal)) {
				$postal = str_replace('*', '%', $postal);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::POSTAL, $postal, $comparison);
	}

	/**
	 * Filter the query on the city column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
	 * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $city The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByCity($city = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($city)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $city)) {
				$city = str_replace('*', '%', $city);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the phone column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
	 * $query->filterByPhone('%fooValue%'); // WHERE phone LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $phone The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByPhone($phone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($phone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $phone)) {
				$phone = str_replace('*', '%', $phone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::PHONE, $phone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
	 * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $fax The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByFax($fax = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fax)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fax)) {
				$fax = str_replace('*', '%', $fax);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the website column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByWebsite('fooValue');   // WHERE website = 'fooValue'
	 * $query->filterByWebsite('%fooValue%'); // WHERE website LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $website The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function filterByWebsite($website = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($website)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $website)) {
				$website = str_replace('*', '%', $website);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealerPeer::WEBSITE, $website, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Dealer $dealer Object to remove from the list of results
	 *
	 * @return    DealerQuery The current query, for fluid interface
	 */
	public function prune($dealer = null)
	{
		if ($dealer) {
			$this->addUsingAlias(DealerPeer::ID, $dealer->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseDealerQuery