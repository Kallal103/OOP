<?php
/**
 * Traits 
 * 1. we can create multiple traits
 * 2. we have to use keyword trait 
 * 3. we can use any access modifier
 * 4. we can't instatiate 
 */

//  trait Hi {
//    public function Boy(){
//        echo "I am a Boy";
//    }
//  }

//  trait Hello {
//     public function Girl(){
//         echo "I am a girl";
//     }
//  }

//  class World  {
//      use Hi, Hello;

//  }

//  $ob = new World;
//  $ob->Boy();


// trait Hi {
//        public function Boy(){
//            echo "I am a Boy";
//        }
// }
    
// trait Hello {
//         public function Girl(){
//             echo "I am a girl";
//         }
// }
// trait  ftrait{
//     use Hi, Hello;
// }

// class flass{
//     use ftrait;

// }

// $obf = new flass;
// $obf->Boy();

trait Hi {
       public function Boy(){
           echo "I am a Boy from hi";
       }
}
    
trait Hello {
        public function Boy(){
            echo "I am a Boy from hello";
        }
}


class flass{
    use Hi,Hello{
        Hi::Boy insteadOf Hello;
        Hi::Boy as HiBoy;
        Hello::Boy insteadOf Hi;
        Hello::Boy as HeyBoy;
    }

}

$ob = new flass;
$ob->HiBoy();
echo "<br>";
$ob->HeyBoy();
