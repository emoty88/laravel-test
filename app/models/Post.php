<?php
	class Post extends Eloquent {
		public function category()
		{
			return $this->belongsTo('Category');
		}
	}
?>