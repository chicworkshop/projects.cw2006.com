////Glow effect
import flash.filters.GlowFilter;
//aa = createGlowFilterRectangle("GlowFilterBlurX");
MovieClip.prototype.glowEffect = function(glowX, glowY) {
	var filter:GlowFilter = new GlowFilter(0x000000, 0.3, glowX, glowY, 2, 8, false, false);
	var filterArray:Array = new Array();
	filterArray.push(filter);
	this.filters = filterArray;
	return rect;
};