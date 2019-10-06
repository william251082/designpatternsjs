// The Rectangle class base type should also equally take a derived type
// Don't introduce a derived class (Square), it breaks the base class (Rectangle)

class Rectangle
{
  constructor(width, height)
  {
    this._width = width;
    this._height = height;
  }

  get width() { return this._width; }
  get height() { return this._height; }

  set width(value) { this._width = value; }
  set height(value) { this._height = value; }

  get area()
  {
    return this._width * this._height;
  }

  toString()
  {
    return `${this._width}×${this._height}`;
  }
}

// Get rid of the Square class and just have some isSquare() in the Rectangle class
class Square extends Rectangle
{
  constructor(size)
  {
    super(size, size);
  }

  set width(value)
  {
    this._width = this._height = value;
  }

  set height(value)
  {
    this._width = this._height = value;
  }
}

// Rectangle to square modification isn't ideal
let useIt = function(rc)
{
  // getting the rc._width isn't ideal
  let width = rc._width;
  rc.height = 10;
  console.log(
    `Expected area of ${10*width}, ` +
    `got ${rc.area}`
  );
};

let rc = new Rectangle(2,3);
useIt(rc);

let sq = new Square(5);
useIt(sq);