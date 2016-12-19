<?php

namespace Rokr\Tracer;

class Tracer
{
	/**
	 * [$files description]
	 * @var [type]
	 */
	protected $files;

	/**
	 * [$realPath description]
	 * @var [type]
	 */
	protected $realPath;

	/**
	 * [$debug description]
	 * @var [type]
	 */
	protected $debug;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->files 	= \File::allFiles(base_path().config('tracer.path'));
		$this->realPath = '<div style="border: 1px solid yellowgreen"> {{last($this->lastCompiled)}}';
		$this->debug 	= config('tracer.trace');
	}

	/**
	 * Start the tracer
	 * @return [type] [description]
	 */
	public function trace() 
	{
	    foreach ($this->files as $file) {
	    	($this->debug === true) ? $this->addTrace($file) : $this->removeTrace($file);
	    }
	}

	/**
	 * Add the trace to the view
	 * @param [type] $file [description]
	 */
	public function addTrace($file)
	{
		// If the file does not contain the trace, add it.
		if( strpos(\File::get($file), $this->realPath) === false && env('APP_DEBUG') == true) {
			\File::prepend($file, $this->realPath);
			\File::append($file, '</div>');
		}
	}

	/**
	 * Remove the trace from the view
	 * @param  [type] $file [description]
	 * @return [type]       [description]
	 */
	public function removeTrace($file)
	{
        // If the file does contain the trace, remove it.
        if( strpos(\File::get($file), $this->realPath) !== false) {
            $content = str_replace($this->realPath, '', \File::get($file));
            $content = substr($content, 0, -6);
            \File::put($file, $content);
        }
	}
}