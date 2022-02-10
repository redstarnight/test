<?php

    class a{
        public function test7($input)
        {
            if(is_array($input)){
                $results="";
                foreach($input as $item){
                    $results .= $this->get($item);

                }
                return results;
            }

            return $this->get($input);

            ///////////////
            $input = (array)$input;
           
            $results="";
            foreach($input as $item){
                $results .= $this->get($item);
            }
            return results;
            }

            

    }
    

?>