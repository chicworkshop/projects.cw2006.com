MovieClip.prototype.ruch = function(pozX, pozY, tempo, easing) {
	this.pozX = pozX;
	this.pozY = pozY;
	this.tempo = tempo;
	this.easing = easing;
	this.xSpeed = 0;
	this.ySpeed = 0;
	this.onEnterFrame = function() {
		this.xDim = this.pozX-this._x;
		this.yDim = this.pozY-this._y;
		this.xSpeed = this.xSpeed+this.xDim/this.tempo;
		this.ySpeed = this.ySpeed+this.yDim/this.tempo;
		this.xSpeed = this.xSpeed*this.easing;
		this.ySpeed = this.ySpeed*this.easing;
		this._x = this._x+this.xSpeed;
		this._y = this._y+this.ySpeed;
		if (Math.abs(this.xDim)<0.500000 && Math.abs(this.yDim)<0.500000) {
			delete this["onEnterFrame"];
			this._x = this.pozX;
			this._y = this.pozY;
		}
		// end if  
	};
};
MovieClip.prototype.obscale = function(scaX, scaY, tempo1, easing1) {
	this.scaX = scaX;
	this.scaY = scaY;
	this.tempo1 = tempo1;
	this.easing1 = easing1;
	this.xSpeed = 0;
	this.ySpeed = 0;
	this.onEnterFrame = function() {
		this.xSiz = this.scaX-this._width;
		this.ySiz = this.scaY-this._height;
		this.xSpeed = this.xSpeed+this.xSiz/this.tempo1;
		this.ySpeed = this.ySpeed+this.ySiz/this.tempo1;
		this.xSpeed = this.xSpeed*this.easing1;
		this.ySpeed = this.ySpeed*this.easing1;
		this._width = this._width+this.xSpeed;
		this._height = this._height+this.ySpeed;
		if (Math.abs(this.xSiz)<0.500000 && Math.abs(this.ySiz)<0.500000) {
			delete this["onEnterFrame"];
			this._width = this.scaX;
			//this._height = this.scaY;
		}
		// end if  
	};
};
MovieClip.prototype.obrot = function(alpha, as, sd) {
	this._alpha = alpha;
	this.as = as;
	this.sd = sd;
	this.rspeed = 0;
	this.onEnterFrame = function() {
		this.rd = this.rotate-this._rotation;
		this.rspeed = this.rspeed+this.rd/this.as;
		this.rspeed = this.rspeed*this.sd;
		this._rotation = this._rotation+this.rspeed;
		if (Math.abs(this.xd)<0.300000 && Math.abs(this.yd)<0.300000) {
			delete this["onEnterFrame"];
			this._rotation = this.rotate;
		}
		// end if  
	};
};
MovieClip.prototype.runalpha = function(alpha, alpas, alpsd) {
	this.alpha = alpha;
	this.alpas = alpas;
	this.alpsd = alpsd;
	this.rspeed = 10;
	this.onEnterFrame = function() {
		this.alprd = this.alpha-this._alpha;
		this.rspeed = this.rspeed+this.alprd/this.alpas;
		this.rspeed = this.rspeed*this.alpsd;
		this._alpha = this._alpha+this.rspeed;
		if (Math.abs(this.alprd)<0.9) {
			this._alpha = this.alpha;
			delete this["onEnterFrame"];
		}
		// end if  
	};
};
////
