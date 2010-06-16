<?php
/**
 * @package getresourcestag
 * @subpackage build
 */
$properties = array(
     array(
        'name' => 'tpl',
        'desc' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'tplOdd',
        'desc' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'tplFirst',
        'desc' => 'Name of a chunk serving as resource template for the first resource (see first property).',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'tplLast',
        'desc' => 'Name of a chunk serving as resource template for the last resource (see last property).',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'sortby',
        'desc' => 'Field to sort by. Defaults to publishedon.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'publishedon',
    ),
    array(
        'name' => 'sortbyAlias',
        'desc' => 'Query alias for sortby field. Defaults to an empty string.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'sortbyEscaped',
        'desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
    ),
    array(
        'name' => 'sortdir',
        'desc' => 'Order which to sort by. Defaults to DESC.',
        'type' => 'list',
        'options' => array(
            array('text' => 'ASC','vaue' => 'ASC'),
            array('text' => 'DESC','value' => 'DESC'),
        ),
        'value' => 'DESC',
    ),
    array(
        'name' => 'limit',
        'desc' => 'Limits the number of resources returned. Defaults to 5.',
        'type' => 'textfield',
        'options' => '',
        'value' => '5',
    ),
    array(
        'name' => 'offset',
        'desc' => 'An offset of resources returned by the criteria to skip.',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
    ),
    array(
        'name' => 'tvFilters',
        'desc' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimeter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'depth',
        'desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
        'type' => 'textfield',
        'options' => '',
        'value' => '10',
    ),
    array(
        'name' => 'parents',
        'desc' => 'Optional. Comma-delimited list of ids serving as parents.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'includeContent',
        'desc' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'includeTVs',
        'desc' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'processTVs',
        'desc' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'tvPrefix',
        'desc' => 'The prefix for TemplateVar properties. Defaults to: tv.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tv.',
    ),
    array(
        'name' => 'idx',
        'desc' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'first',
        'desc' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'last',
        'desc' => ' Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'debug',
        'desc' => 'If true, will send the SQL query to the MODx log. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
    array(
        'name' => 'namespace',
        'desc' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    )
    ,array(
        'name' => 'limit',
        'desc' => 'The result limit per page; can be overridden in the $_REQUEST.',
        'type' => 'textfield',
        'options' => '',
        'value' => '10',
    )
    ,array(
        'name' => 'offset',
        'desc' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
    )
    ,array(
        'name' => 'page',
        'desc' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
    )
    ,array(
        'name' => 'pageVarKey',
        'desc' => 'The key of a property that indicates the current page.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'page',
    )
    ,array(
        'name' => 'totalVar',
        'desc' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'total',
    )
    ,array(
        'name' => 'pageLimit',
        'desc' => 'The maximum number of pages to display when rendering paging controls',
        'type' => 'textfield',
        'options' => '',
        'value' => '5',
    )
    ,array(
        'name' => 'elementClass',
        'desc' => 'The class of element that will be called by the getPage snippet instance.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'modSnippet',
    )
    ,array(
        'name' => 'pageNavVar',
        'desc' => 'The key of a placeholder to be set with the paging navigation controls.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'page.nav',
    )
    ,array(
        'name' => 'pageNavTpl',
        'desc' => 'Content representing a single page navigation control.',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
    )
    ,array(
        'name' => 'pageFirstTpl',
        'desc' => 'Content representing the first page navigation control.',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
    )
    ,array(
        'name' => 'pageLastTpl',
        'desc' => 'Content representing the last page navigation control.',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
    )
    ,array(
        'name' => 'pagePrevTpl',
        'desc' => 'Content representing the previous page navigation control.',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
    )
    ,array(
        'name' => 'pageNextTpl',
        'desc' => 'Content representing the next page navigation control.',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
    )
);

return $properties;