<?php



/**
 * This class defines the structure of the 'Posts' table.
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
class PostTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'models.map.PostTableMap';

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
		$this->setName('Posts');
		$this->setPhpName('Post');
		$this->setClassname('Post');
		$this->setPackage('models');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 70, null);
		$this->addColumn('USERID', 'Userid', 'INTEGER', true, null, null);
		$this->addColumn('PRICEFROM', 'Pricefrom', 'INTEGER', true, 6, null);
		$this->addColumn('PRICETO', 'Priceto', 'INTEGER', true, 6, null);
		$this->addColumn('YEARFROM', 'Yearfrom', 'INTEGER', false, 4, null);
		$this->addColumn('YEARTO', 'Yearto', 'INTEGER', false, 4, null);
		$this->addColumn('CARMAKEID', 'Carmakeid', 'INTEGER', true, null, null);
		$this->addColumn('CARMODELID', 'Carmodelid', 'INTEGER', true, null, null);
		$this->addColumn('TRANSMISSION', 'Transmission', 'VARCHAR', true, 255, null);
		$this->addColumn('TRADEIN', 'Tradein', 'INTEGER', true, 1, null);
		$this->addColumn('COMMENT', 'Comment', 'VARCHAR', true, 1000, null);
		$this->addColumn('SUBMITTED', 'Submitted', 'INTEGER', true, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // PostTableMap
