<?php



/**
 * This class defines the structure of the 'CarMakes' table.
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
class CarMakeTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'models.map.CarMakeTableMap';

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
		$this->setName('CarMakes');
		$this->setPhpName('CarMake');
		$this->setClassname('CarMake');
		$this->setPackage('models');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('MAKE', 'Make', 'VARCHAR', true, 100, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Post', 'Post', RelationMap::ONE_TO_MANY, array('id' => 'car_make_id', ), null, null, 'Posts');
		$this->addRelation('CarModel', 'CarModel', RelationMap::ONE_TO_MANY, array('id' => 'make_id', ), null, null, 'CarModels');
	} // buildRelations()

} // CarMakeTableMap
