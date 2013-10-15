<?php
/**
 * A class that represents a view of something on the page. Views are dumb and should have to do nothing other
 * than render themselves.
 */
abstract class View {

	/**
	 * Render this View
	 * @return $this
	 */
	abstract function render();

}