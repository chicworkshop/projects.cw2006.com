////swap Depth movieClip
curdepth = 10000;
MovieClip.prototype.highDepth = function() {
	this.swapDepths(curdepth);
	curdepth = curdepth+2;
	_root.mainArea.bg_hit._visible = true;
	_root.mainArea.bg_hit.swapDepths(curdepth-3);
};
////Moving main area
_global.movearea = function(posX, posY) {
	_root.mainArea.ruch((posX*0.78)+150, (posY*0.78)+150, 1, 0.2);
};
_global.goback = function() {
	_root.mainArea.ruch(0, 0, 1, 0.2);
};
////Animation txt
MovieClip.prototype.anitxt = function(txt) {
	buffer = txt;
	i = 0;
	//trace(titletxt);
	lastIndex = buffer.length;
	this.txt = "";
	this.onEnterFrame = function() {
		if (i<lastIndex) {
			this.txt += (buffer.substring(i, i+1));
			(i++);
		}
		if (i == lastIndex) {
			delete this.onEnterFrame;
		}
	};
};
////Animation title text
MovieClip.prototype.showtitle = function(titletxt) {
	buffer = titletxt;
	i = 0;
	//trace(titletxt);
	lastIndex = buffer.length;
	this.titletext = "";
	this.onEnterFrame = function() {
		if (i<lastIndex) {
			this.titletext += (buffer.substring(i, i+1));
			(i++);
		}
		if (i == lastIndex) {
			delete this.onEnterFrame;
		}
	};
};
////Animation main title
_global.showmaintitle = function(titletxt) {
	delete this.onEnterFrame;
	buffer = titletxt;
	//trace(titletxt)
	i = 0;
	//trace(titletxt);
	lastIndex = buffer.length;
	_root.maintitle.titletext = "";
	onEnterFrame = function () {
		if (i<lastIndex) {
			_root.maintitle.titletext += (buffer.substring(i, i+1));
			(i++);
		}
		if (i == lastIndex) {
			delete onEnterFrame;
		}
	};
};
////Blank title
_global.blanktitle = function() {
	buffer = "";
	//trace(titletxt)
	i = 0;
	//trace(titletxt);
	lastIndex = buffer.length;
	_root.maintitle.titletext = "";
	onEnterFrame = function () {
		if (i<lastIndex) {
			_root.maintitle.titletext += (buffer.substring(i, i+1));
			(i++);
		}
		if (i == lastIndex) {
			delete onEnterFrame;
		}
	};
};
////Animation button
MovieClip.prototype.anibtn = function(posX, posY) {
	this._x = posX+2;
	this._y = posY+1;
	this._xscale = 105;
	this._yscale = 105;
	this.glowEffect(6, 6);
	this.onRollOut = function() {
		this._x = posX;
		this._y = posY;
		this._xscale = 100;
		this._yscale = 100;
		this.glowEffect(0, 0);
	};
};
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
//glowEffect("bb",3,3)
////Close Window
_global.closeWin = function(MC) {
	if (_root.winOpen == true) {
		unloadMovie(_root.mainArea[MC].loc);
		_root.mainArea[MC].gotoAndPlay(61);
		_root.winOpen = false;
	}
};
////Open Zoom page
_global.zoompage = function(swf, titletxt) {
	_root.zoompage.swf = swf;
	trace(titletxt);
	_root.zoompage.topbar.titletxt = titletxt;
	_root.zoompage.gotoAndPlay(2);
};
