<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>


  <script>
    // OOP

    // 1st

    function Table(brand,model, price){
      let self = this;

        let client = "Teddy";

        self.brand = brand;
        self.model = model;
        self.price = price;
        this.color = "rgb(100,30,50)";
        this.stuff = ["projector","pen","cables"];

        this.sayHello = function(){
          console.log( this.brand );
        }
    }

    Table.prototype.sayHello = function(){
      console.log( this.brand );
    }

    let myTable = new Table("Brico","BigBrico",40);

    myTable.sayHello();


   // 2 second


    let Table = {
        brand : "Ikeaaaaaa",
        model : "ekfgleirzu",
        price : 30,
        color : "rgb(100,30,50)",
        stuff : ["projector","pen","cables"]
    }
    Table.sayHello = function(){
      return this.brand;
    }

    let table1 = Object.create(Table);
        table1.price = 20;

    let table2 = Object.create(Table);;
        table2.price = 40;
        table2.brand = "Bricooo";

        console.log( table1.sayHello() );
        console.log( table2.sayHello() );

    console.log( table1 );
    console.log( table2 );


  // 3rd
  //
  class Table {

    constructor(brand, model, color){
      this.brand = brand;
      this.model = model;
      this.color = color;
      if(brand == "Brico"){
        this.brand = "Not good";
      }
    }

    sayHello (){
      console.log( this.brand);
    }

  }

  let myTable = new Table("Okea","kuyrfg","Blue");

  class SuperTable extends Table {
    constructor(brand, model, color) {
      // code
      super(brand, model, color);
      this.bag = "Drugs";
    }

    // methods
  }

  let mySuperTable = new SuperTable("Brico","BricTable", 50);


    console.log( myTable )
    console.log( mySuperTable )



  </script>

</body>
</html>
