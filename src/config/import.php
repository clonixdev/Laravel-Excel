<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Has heading
    |--------------------------------------------------------------------------
    |
    | The sheet has a heading row which we can use as attribute names
    |
    */

    'heading'   => true,

    /*
    |--------------------------------------------------------------------------
    | Cell name word seperator
    |--------------------------------------------------------------------------
    |
    | The default seperator which is used for the cell names
    |
    */

    'seperator' => '_',

    /*
    |--------------------------------------------------------------------------
    | Import encoding
    |--------------------------------------------------------------------------
    */

    'encoding'  => array(

        'input'     =>  'UTF-8',
        'output'    =>  'UTF-8'

    ),

    /*
    |--------------------------------------------------------------------------
    | Calculate
    |--------------------------------------------------------------------------
    |
    | By default cells with formulas will be calculated.
    |
    */

    'calculate' => true,

    /*
    |--------------------------------------------------------------------------
    | Ignore empty cells
    |--------------------------------------------------------------------------
    |
    | By default empty cells are not ignored
    |
    */

    'ignoreEmpty' => false,

    /*
    |--------------------------------------------------------------------------
    | Force sheet collection
    |--------------------------------------------------------------------------
    |
    | For a sheet collection even when there is only 1 sheets.
    | When set to false and only 1 sheet found, the parsed file will return
    | a row collection instead of a sheet collection.
    | When set to true, it will return a sheet collection instead.
    |
    */
    'force_sheets_collection' => false,

    /*
    |--------------------------------------------------------------------------
    | Date format
    |--------------------------------------------------------------------------
    |
    | The format dates will be parsed to
    |
    */

    'dates' => array(

        /*
        |--------------------------------------------------------------------------
        | Enable/disable date formatting
        |--------------------------------------------------------------------------
        */
        'enabled'   => true,

        /*
        |--------------------------------------------------------------------------
        | Default date format
        |--------------------------------------------------------------------------
        |
        | If set to false, a carbon object will return
        |
        */
        'format'    => false,

        /*
        |--------------------------------------------------------------------------
        | Date columns
        |--------------------------------------------------------------------------
        */
        'columns'   => array()
    ),

    /*
    |--------------------------------------------------------------------------
    | Import sheets by config
    |--------------------------------------------------------------------------
    */
    'sheets'    => array(

        /*
        |--------------------------------------------------------------------------
        | Example sheet
        |--------------------------------------------------------------------------
        |
        | Example sheet "test" will grab the firstname at cell A2
        |
        */

        'test'       =>  array(

            'firstname' => 'A2'

        )

    )

);