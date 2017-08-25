<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_citis
**/

class ModCitisHelper
{

    public static function getTitle($params)
    {

      $db = JFactory::getDbo();
      $query = $db->getQuery(true)
            ->select($db->quoteName('id'))
            ->from($db->quoteName('#__citis'))
            ->where('title = ' . $db->Quote($params));
      $db->setQuery($query);
      $result = $db->loadResult();
      return $result;
    }


}
