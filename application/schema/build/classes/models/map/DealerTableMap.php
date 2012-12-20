<?php



/**
 * This class defines the structure of the 'Dealers' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.models.map
 */
class DealerTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'models.map.DealerTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('Dealers');
		$this->setPhpName('Dealer');
		$this->setClassname('Dealer');
		$this->setPackage('models');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('SHOPNAME', 'Shopname', 'VARCHAR', true, 100, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 300, null);
		$this->addColumn('PASSWORD', 'Password', 'VARCHAR', true, 40, null);
		$this->addColumn('CLEARANCE', 'Clearance', 'INTEGER', true, 1, null);
		$this->addColumn('STREETNAME', 'Streetname', 'VARCHAR', true, 100, null);
		$this->addColumn('STREETNUMBER', 'Streetnumber', 'VARCHAR', true, 5, null);
		$this->addColumn('POSTAL', 'Postal', 'VARCHAR', true, 7, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', true, 80, null);
		$this->addColumn('PHONE', 'Phone', 'VARCHAR', true, 12, null);
		$this->addColumn('FAX', 'Fax', 'VARCHAR', true, 12, null);
		$this->addColumn('WEBSITE', 'Website', 'VARCHAR', true, 500, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DealerTableMap
