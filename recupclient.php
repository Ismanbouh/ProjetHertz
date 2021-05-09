<?php 
     

function  recupdispo(){
        include("connection.php");
           

       
    $rep = $pdo->query(" SELECT
  
    Marque_Vehicule,
    image_Vehicule,
    Prix_Location,
    Disponibilite,
    Annee
   
FROM CLIENT
INNER JOIN location ON CLIENT
    .id_Client = location.Id_Client
INNER JOIN Vehicule ON location.Id_Vehicule = Vehicule.Id_Vehicule ")

;
     
while ($vehicule = $rep->fetch()) {
        
    echo "<form>

    
    <tr>
    <td width='2%'><img  src='image/".$vehicule['image_Vehicule']."'width=150vh'> </td>
    <td width='2%'> ".$vehicule[ 'Annee']."  </td>
    <td width='2%'> ".$vehicule[ 'Prix_Location']."  </td>
    <td width='2%'> ".$vehicule[ 'Marque_Vehicule']." </td>
    
    <td width='2%'><img  src='image/".$vehicule[ 'Disponibilite']."'width='60vh' > </td>
   
    
 
   </form>
   
   ";




             }


    
            }


            
function  recupclient(){
        include("connection.php");
           

       
    $rep = $pdo->query(" SELECT
    Nom_Client,
    Prenom_Client,
    Adresse_Client,
    Ville_Client,
    Code_Postale_Client,
    Tel
FROM
    client ")

;
     
while ($vehicule = $rep->fetch()) {

        

   

           

           
             
    echo "<form>

    <tr>
 
    <td> ".$vehicule[ 'Nom_Client']."  </td>
    <td> ".$vehicule[ 'Prenom_Client']."  </td>
   
    <td> ".$vehicule[ 'Ville_Client']." </td>
    <td> ".$vehicule[ 'Code_Postale_Client']." </td>
    <td> ".$vehicule[ 'Adresse_Client']." </td>
    <td> ".$vehicule[ 'Tel']." </td>
    
    
   
    </tr>
    
  
    
    
    
  
     
        
     






     



       
   
   
   </form>
   
  ";




             }


    
            }

   
   




























  

                         function recuphoto(){
                            include("connection.php");
                               
                   
                           
                        $rep = $pdo->query(" SELECT
                        Nom_Client,
                        Prenom_Client,
                        Adresse_Client,
                        date_debut_location,
                        date_fin_location,
                        Marque_Vehicule,
                        image_Vehicule,
                        Prix_Location,
                        Immatriculation
                    FROM CLIENT
                    INNER JOIN location ON CLIENT
                        .id_Client = location.Id_Client
                    INNER JOIN Vehicule ON location.Id_Vehicule = Vehicule.Id_Vehicule ")
                
                    ;
                         
                    while ($vehicule = $rep->fetch()) {
                
                            
                
                       
                
                               
                
                               
                        echo "<form>

                        <tr>
                        
                        <td ><img  src='image/".$vehicule['image_Vehicule']."'width='200vh' >
                        <td > ".$vehicule['Nom_Client']." </td>
                        <td > ".$vehicule['Prenom_Client']." </td>
                        <td > ".$vehicule[ 'Adresse_Client']." </td>
                        <td> ".$vehicule[ 'date_debut_location']." </td>
                        <td > ".$vehicule[ 'date_fin_location']." </td>
                        <td > ".$vehicule[ 'Prix_Location']." </td>
                        <td > ".$vehicule[ 'Marque_Vehicule']." </td>
                        
                        <td > ".$vehicule[ 'Immatriculation']." </td>
                      
                        
                      
                        </tr> 
                            
                    
                       
                       </form>
                       
                       ";
                
                
                
                
                                 }
                
        
                        
                                }






                                
                         function recupVehicule(){
                            include("connection.php");
                               
                   
                           
                        $rep = $pdo->query("SELECT
                         Image_Vehicule,
                        Marque_Vehicule,
                        Immatriculation,
                        Prix_Location,
                        Annee
                       
                       
                    FROM
                        vehicule ")
                
                    ;
                         
                    while ($vehiculee = $rep->fetch()) {
                
                      
                        echo "<form>

                        <tr>
                        <td width='2%'><img  src='image/".$vehiculee['Image_Vehicule']."'width='255vh'></td>
                        <td width='2%'> ".$vehiculee[ 'Marque_Vehicule']." </td>
                        <td width='2%'> ".$vehiculee[ 'Annee']." </td>
                        <td width='2%'> ".$vehiculee[ 'Immatriculation']."</td>
                        <td width='2%'> ".$vehiculee[ 'Prix_Location']."</td>
                       
                       
                     

                        
                      
                        </tr> 
                            
                      
                       
                       
                       </form>
                       
                       ";
                
                
                
                
                                 }
                
        
                        
                                }
                                
  

        
    
                  
                     ?>
        



                  
            