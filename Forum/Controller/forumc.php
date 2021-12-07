<?php
	include '../config.php';
	include_once '../Model/forum.php';
	class forumC {
		function showpost(){ /*read*/
			$sql="SELECT * FROM forum";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function deletepost($id_q){ /*delete*/
			$sql="DELETE FROM forum WHERE id_q=:id_q";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_q', $id_q);
			try{
				$req->execute();
			}
			catch(PDOException $e){
				$e->getMeesage();
			}
		}
		function addpost($forum){ /*create*/
			$sql="INSERT INTO forum (id_q, title_q, descr_q) 
			VALUES (:id_q,:title_q,:descr_q)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_q' => $forum->getid_q(),
					'title_q' => $forum->gettitle_q(),
					'descr_q' => $forumt->getdescr_q(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function getpost($id_q){
			$sql="SELECT * from forum where id_q=$id_q";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$forum=$query->fetch();
				return $forum;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function updatepost($forum, $id_q){ /*update*/
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE forum SET 
						title_q= :title_q, 
						descr_q= :descr_q, 
					WHERE id_q= :id_q'
				);
				$query->execute([
					'id_q' => $forum->getid_q(),
					'title_q' => $forum->gettitle_q(),
					'descr_q' => $forum->getdecsr_q(),
				]);

				echo $query->rowCount() . " Your post has been updated ! <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		

			


	}
?>