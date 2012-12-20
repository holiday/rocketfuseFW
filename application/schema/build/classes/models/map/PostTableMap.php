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
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'Users', 'ID', true, null, null);
		$this->addColumn('PRICEFROM', 'Pricefrom', 'INTEGER', true, null, null);
		$this->addColumn('PRICETO', 'Priceto', 'INTEGER', true, null, null);
		$this->addColumn('YEARFROM', 'Yearfrom', 'INTEGER', false, 4, null);
		$this->addColumn('YEARTO', 'Yearto', 'INTEGER', false, 4, null);
		$this->addForeignKey('CAR_MAKE_ID', 'CarMakeId', 'INTEGER', 'CarMakes', 'ID', true, null, null);
		$this->addForeignKey('CAR_MODEL_ID', 'CarModelId', 'INTEGER', 'CarModels', 'ID', true, null, null);
		$this->addColumn('TRANSMISSION', 'Transmission', 'VARCHAR', true, 255, null);
		$this->addColumn('TRADEIN', 'Tradein', 'INTEGER', true, 1, null);
		$this->addColumn('POSTTYPE', 'Posttype', 'VARCHAR', true, 4, null);
		$this->addColumn('COMMENT', 'Comment', 'VARCHAR', true, 1000, null);
		$this->addColumn('DATESUBMITTED', 'Datesubmitted', 'INTEGER', true, 10, null);
		$this->addColumn('ACTIVATION', 'Activation', 'VARCHAR', false, 40, null);
		$this->addColumn('ACTIVE', 'Active', 'BOOLEAN', true, 1, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
		$this->addRelation('CarMake', 'CarMake', RelationMap::MANY_TO_ONE, array('car_make_id' => 'id', ), null, null);
		$this->addRelation('CarModel', 'CarModel', RelationMap::MANY_TO_ONE, array('car_model_id' => 'id', ), null, null);
	} // buildRelations()

} // PostTableMap
