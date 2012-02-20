<?php
/**
 * StringOutputProvider ffmpeg provider implementation
 * 
 * @author funrob (Rob Walch, rwalch@gmail.com)
 * @package FFmpegPHP
 * @subpackage provider
 * @license New BSD
 * @version 2.5
 */
class StringOutputProvider extends AbstractOutputProvider {
	
    protected $_output;

    /**
     * Constructor
     * 
     * @param string $output parsable output
     */
    public function __construct($output) {
        $this->setOutput($output);
    }
    
    /**
     * Getting parsable output
     * 
     * @return string
     */    
    public function getOutput() {
        return $this->_output;
    }

    /**
     * Setting parsable output
     * 
     * @param string $output
     */    
    public function setOutput($output) {
        $this->_output = $output;
    }
} 
?>
