<?php
	/**
	 * The abstract GoogleCategoriesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the GoogleCategories subclass which
	 * extends this GoogleCategoriesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the GoogleCategories class.
	 * 
	 * @package LightSpeed Web Store
	 * @subpackage GeneratedDataObjects
	 * @property integer $Rowid the value for intRowid (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property string $Name1 the value for strName1 
	 * @property string $Name2 the value for strName2 
	 * @property string $Name3 the value for strName3 
	 * @property string $Name4 the value for strName4 
	 * @property string $Name5 the value for strName5 
	 * @property string $Name6 the value for strName6 
	 * @property string $Name7 the value for strName7 
	 * @property string $Name8 the value for strName8 
	 * @property string $Name9 the value for strName9 
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class GoogleCategoriesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column xlsws_google_categories.rowid
		 * @var integer intRowid
		 */
		protected $intRowid;
		const RowidDefault = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name1
		 * @var string strName1
		 */
		protected $strName1;
		const Name1MaxLength = 255;
		const Name1Default = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name2
		 * @var string strName2
		 */
		protected $strName2;
		const Name2MaxLength = 255;
		const Name2Default = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name3
		 * @var string strName3
		 */
		protected $strName3;
		const Name3MaxLength = 255;
		const Name3Default = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name4
		 * @var string strName4
		 */
		protected $strName4;
		const Name4MaxLength = 255;
		const Name4Default = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name5
		 * @var string strName5
		 */
		protected $strName5;
		const Name5MaxLength = 255;
		const Name5Default = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name6
		 * @var string strName6
		 */
		protected $strName6;
		const Name6MaxLength = 255;
		const Name6Default = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name7
		 * @var string strName7
		 */
		protected $strName7;
		const Name7MaxLength = 255;
		const Name7Default = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name8
		 * @var string strName8
		 */
		protected $strName8;
		const Name8MaxLength = 255;
		const Name8Default = null;


		/**
		 * Protected member variable that maps to the database column xlsws_google_categories.name9
		 * @var string strName9
		 */
		protected $strName9;
		const Name9MaxLength = 255;
		const Name9Default = null;


		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a GoogleCategories from PK Info
		 * @param integer $intRowid
		 * @return GoogleCategories
		 */
		public static function Load($intRowid) {
			// Use QuerySingle to Perform the Query
			return GoogleCategories::QuerySingle(
				QQ::Equal(QQN::GoogleCategories()->Rowid, $intRowid)
			);
		}

		/**
		 * Load all GoogleCategorieses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return GoogleCategories[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call GoogleCategories::QueryArray to perform the LoadAll query
			try {
				return GoogleCategories::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all GoogleCategorieses
		 * @return int
		 */
		public static function CountAll() {
			// Call GoogleCategories::QueryCount to perform the CountAll query
			return GoogleCategories::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = GoogleCategories::GetDatabase();

			// Create/Build out the QueryBuilder object with GoogleCategories-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'xlsws_google_categories');
			GoogleCategories::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('xlsws_google_categories');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single GoogleCategories object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return GoogleCategories the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = GoogleCategories::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new GoogleCategories object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = GoogleCategories::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem) $objToReturn[] = $objItem;
				}

				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if (is_null($objDbRow)) return null;
				return GoogleCategories::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of GoogleCategories objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return GoogleCategories[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = GoogleCategories::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return GoogleCategories::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = GoogleCategories::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
		
			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcodo Query method to query for a count of GoogleCategories objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = GoogleCategories::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = GoogleCategories::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'xlsws_google_categories_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with GoogleCategories-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				GoogleCategories::GetSelectFields($objQueryBuilder);
				GoogleCategories::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return GoogleCategories::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this GoogleCategories
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'xlsws_google_categories';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'rowid', $strAliasPrefix . 'rowid');
			$objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			$objBuilder->AddSelectItem($strTableName, 'name1', $strAliasPrefix . 'name1');
			$objBuilder->AddSelectItem($strTableName, 'name2', $strAliasPrefix . 'name2');
			$objBuilder->AddSelectItem($strTableName, 'name3', $strAliasPrefix . 'name3');
			$objBuilder->AddSelectItem($strTableName, 'name4', $strAliasPrefix . 'name4');
			$objBuilder->AddSelectItem($strTableName, 'name5', $strAliasPrefix . 'name5');
			$objBuilder->AddSelectItem($strTableName, 'name6', $strAliasPrefix . 'name6');
			$objBuilder->AddSelectItem($strTableName, 'name7', $strAliasPrefix . 'name7');
			$objBuilder->AddSelectItem($strTableName, 'name8', $strAliasPrefix . 'name8');
			$objBuilder->AddSelectItem($strTableName, 'name9', $strAliasPrefix . 'name9');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a GoogleCategories from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this GoogleCategories::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return GoogleCategories
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the GoogleCategories object
			$objToReturn = new GoogleCategories();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'rowid', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'rowid'] : $strAliasPrefix . 'rowid';
			$objToReturn->intRowid = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name1', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name1'] : $strAliasPrefix . 'name1';
			$objToReturn->strName1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name2', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name2'] : $strAliasPrefix . 'name2';
			$objToReturn->strName2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name3', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name3'] : $strAliasPrefix . 'name3';
			$objToReturn->strName3 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name4', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name4'] : $strAliasPrefix . 'name4';
			$objToReturn->strName4 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name5', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name5'] : $strAliasPrefix . 'name5';
			$objToReturn->strName5 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name6', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name6'] : $strAliasPrefix . 'name6';
			$objToReturn->strName6 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name7', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name7'] : $strAliasPrefix . 'name7';
			$objToReturn->strName7 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name8', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name8'] : $strAliasPrefix . 'name8';
			$objToReturn->strName8 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'name9', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name9'] : $strAliasPrefix . 'name9';
			$objToReturn->strName9 = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'xlsws_google_categories__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of GoogleCategorieses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return GoogleCategories[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = GoogleCategories::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = GoogleCategories::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single GoogleCategories object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return GoogleCategories next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return GoogleCategories::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single GoogleCategories object,
		 * by Rowid Index(es)
		 * @param integer $intRowid
		 * @return GoogleCategories
		*/
		public static function LoadByRowid($intRowid, $objOptionalClauses = null) {
			return GoogleCategories::QuerySingle(
				QQ::Equal(QQN::GoogleCategories()->Rowid, $intRowid)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD
		//////////////////////////////////////

		/**
		 * Save this GoogleCategories
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = GoogleCategories::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `xlsws_google_categories` (
							`name`,
							`name1`,
							`name2`,
							`name3`,
							`name4`,
							`name5`,
							`name6`,
							`name7`,
							`name8`,
							`name9`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strName1) . ',
							' . $objDatabase->SqlVariable($this->strName2) . ',
							' . $objDatabase->SqlVariable($this->strName3) . ',
							' . $objDatabase->SqlVariable($this->strName4) . ',
							' . $objDatabase->SqlVariable($this->strName5) . ',
							' . $objDatabase->SqlVariable($this->strName6) . ',
							' . $objDatabase->SqlVariable($this->strName7) . ',
							' . $objDatabase->SqlVariable($this->strName8) . ',
							' . $objDatabase->SqlVariable($this->strName9) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intRowid = $objDatabase->InsertId('xlsws_google_categories', 'rowid');

					

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`xlsws_google_categories`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`name1` = ' . $objDatabase->SqlVariable($this->strName1) . ',
							`name2` = ' . $objDatabase->SqlVariable($this->strName2) . ',
							`name3` = ' . $objDatabase->SqlVariable($this->strName3) . ',
							`name4` = ' . $objDatabase->SqlVariable($this->strName4) . ',
							`name5` = ' . $objDatabase->SqlVariable($this->strName5) . ',
							`name6` = ' . $objDatabase->SqlVariable($this->strName6) . ',
							`name7` = ' . $objDatabase->SqlVariable($this->strName7) . ',
							`name8` = ' . $objDatabase->SqlVariable($this->strName8) . ',
							`name9` = ' . $objDatabase->SqlVariable($this->strName9) . '
						WHERE
							`rowid` = ' . $objDatabase->SqlVariable($this->intRowid) . '
					');

				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this GoogleCategories
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intRowid)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this GoogleCategories with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = GoogleCategories::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`xlsws_google_categories`
				WHERE
					`rowid` = ' . $objDatabase->SqlVariable($this->intRowid) . '');

			
		}

		/**
		 * Delete all GoogleCategorieses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = GoogleCategories::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`xlsws_google_categories`');
		}

		/**
		 * Truncate xlsws_google_categories table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = GoogleCategories::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `xlsws_google_categories`');
		}

		/**
		 * Reload this GoogleCategories from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved GoogleCategories object.');

			// Reload the Object
			$objReloaded = GoogleCategories::Load($this->intRowid);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strName1 = $objReloaded->strName1;
			$this->strName2 = $objReloaded->strName2;
			$this->strName3 = $objReloaded->strName3;
			$this->strName4 = $objReloaded->strName4;
			$this->strName5 = $objReloaded->strName5;
			$this->strName6 = $objReloaded->strName6;
			$this->strName7 = $objReloaded->strName7;
			$this->strName8 = $objReloaded->strName8;
			$this->strName9 = $objReloaded->strName9;
		}

		


		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Rowid':
					// Gets the value for intRowid (Read-Only PK)
					// @return integer
					return $this->intRowid;

				case 'Name':
					// Gets the value for strName 
					// @return string
					return $this->strName;

				case 'Name1':
					// Gets the value for strName1 
					// @return string
					return $this->strName1;

				case 'Name2':
					// Gets the value for strName2 
					// @return string
					return $this->strName2;

				case 'Name3':
					// Gets the value for strName3 
					// @return string
					return $this->strName3;

				case 'Name4':
					// Gets the value for strName4 
					// @return string
					return $this->strName4;

				case 'Name5':
					// Gets the value for strName5 
					// @return string
					return $this->strName5;

				case 'Name6':
					// Gets the value for strName6 
					// @return string
					return $this->strName6;

				case 'Name7':
					// Gets the value for strName7 
					// @return string
					return $this->strName7;

				case 'Name8':
					// Gets the value for strName8 
					// @return string
					return $this->strName8;

				case 'Name9':
					// Gets the value for strName9 
					// @return string
					return $this->strName9;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Name':
					// Sets the value for strName 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name1':
					// Sets the value for strName1 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name2':
					// Sets the value for strName2 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name3':
					// Sets the value for strName3 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName3 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name4':
					// Sets the value for strName4 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName4 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name5':
					// Sets the value for strName5 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName5 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name6':
					// Sets the value for strName6 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName6 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name7':
					// Sets the value for strName7 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName7 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name8':
					// Sets the value for strName8 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName8 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name9':
					// Sets the value for strName9 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName9 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="GoogleCategories"><sequence>';
			$strToReturn .= '<element name="Rowid" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Name1" type="xsd:string"/>';
			$strToReturn .= '<element name="Name2" type="xsd:string"/>';
			$strToReturn .= '<element name="Name3" type="xsd:string"/>';
			$strToReturn .= '<element name="Name4" type="xsd:string"/>';
			$strToReturn .= '<element name="Name5" type="xsd:string"/>';
			$strToReturn .= '<element name="Name6" type="xsd:string"/>';
			$strToReturn .= '<element name="Name7" type="xsd:string"/>';
			$strToReturn .= '<element name="Name8" type="xsd:string"/>';
			$strToReturn .= '<element name="Name9" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('GoogleCategories', $strComplexTypeArray)) {
				$strComplexTypeArray['GoogleCategories'] = GoogleCategories::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, GoogleCategories::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new GoogleCategories();
			if (property_exists($objSoapObject, 'Rowid'))
				$objToReturn->intRowid = $objSoapObject->Rowid;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Name1'))
				$objToReturn->strName1 = $objSoapObject->Name1;
			if (property_exists($objSoapObject, 'Name2'))
				$objToReturn->strName2 = $objSoapObject->Name2;
			if (property_exists($objSoapObject, 'Name3'))
				$objToReturn->strName3 = $objSoapObject->Name3;
			if (property_exists($objSoapObject, 'Name4'))
				$objToReturn->strName4 = $objSoapObject->Name4;
			if (property_exists($objSoapObject, 'Name5'))
				$objToReturn->strName5 = $objSoapObject->Name5;
			if (property_exists($objSoapObject, 'Name6'))
				$objToReturn->strName6 = $objSoapObject->Name6;
			if (property_exists($objSoapObject, 'Name7'))
				$objToReturn->strName7 = $objSoapObject->Name7;
			if (property_exists($objSoapObject, 'Name8'))
				$objToReturn->strName8 = $objSoapObject->Name8;
			if (property_exists($objSoapObject, 'Name9'))
				$objToReturn->strName9 = $objSoapObject->Name9;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, GoogleCategories::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Rowid
	 * @property-read QQNode $Name
	 * @property-read QQNode $Name1
	 * @property-read QQNode $Name2
	 * @property-read QQNode $Name3
	 * @property-read QQNode $Name4
	 * @property-read QQNode $Name5
	 * @property-read QQNode $Name6
	 * @property-read QQNode $Name7
	 * @property-read QQNode $Name8
	 * @property-read QQNode $Name9
	 */
	class QQNodeGoogleCategories extends QQNode {
		protected $strTableName = 'xlsws_google_categories';
		protected $strPrimaryKey = 'rowid';
		protected $strClassName = 'GoogleCategories';
		public function __get($strName) {
			switch ($strName) {
				case 'Rowid':
					return new QQNode('rowid', 'Rowid', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Name1':
					return new QQNode('name1', 'Name1', 'string', $this);
				case 'Name2':
					return new QQNode('name2', 'Name2', 'string', $this);
				case 'Name3':
					return new QQNode('name3', 'Name3', 'string', $this);
				case 'Name4':
					return new QQNode('name4', 'Name4', 'string', $this);
				case 'Name5':
					return new QQNode('name5', 'Name5', 'string', $this);
				case 'Name6':
					return new QQNode('name6', 'Name6', 'string', $this);
				case 'Name7':
					return new QQNode('name7', 'Name7', 'string', $this);
				case 'Name8':
					return new QQNode('name8', 'Name8', 'string', $this);
				case 'Name9':
					return new QQNode('name9', 'Name9', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('rowid', 'Rowid', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
	
	/**
	 * @property-read QQNode $Rowid
	 * @property-read QQNode $Name
	 * @property-read QQNode $Name1
	 * @property-read QQNode $Name2
	 * @property-read QQNode $Name3
	 * @property-read QQNode $Name4
	 * @property-read QQNode $Name5
	 * @property-read QQNode $Name6
	 * @property-read QQNode $Name7
	 * @property-read QQNode $Name8
	 * @property-read QQNode $Name9
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeGoogleCategories extends QQReverseReferenceNode {
		protected $strTableName = 'xlsws_google_categories';
		protected $strPrimaryKey = 'rowid';
		protected $strClassName = 'GoogleCategories';
		public function __get($strName) {
			switch ($strName) {
				case 'Rowid':
					return new QQNode('rowid', 'Rowid', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Name1':
					return new QQNode('name1', 'Name1', 'string', $this);
				case 'Name2':
					return new QQNode('name2', 'Name2', 'string', $this);
				case 'Name3':
					return new QQNode('name3', 'Name3', 'string', $this);
				case 'Name4':
					return new QQNode('name4', 'Name4', 'string', $this);
				case 'Name5':
					return new QQNode('name5', 'Name5', 'string', $this);
				case 'Name6':
					return new QQNode('name6', 'Name6', 'string', $this);
				case 'Name7':
					return new QQNode('name7', 'Name7', 'string', $this);
				case 'Name8':
					return new QQNode('name8', 'Name8', 'string', $this);
				case 'Name9':
					return new QQNode('name9', 'Name9', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('rowid', 'Rowid', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>