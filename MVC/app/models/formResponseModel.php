<?php

    class formResponseModel{
        public function __construct(){
            $this->db = new Model;
        }
        public function getForms(){
            $this->db->query("SELECT * FROM form_response");
            return $this->db->getResultSet();
        }

        public function getForm($form_id){
            $this->db->query("SELECT * FROM form_response WHERE ID = :form_id");
            $this->db->bind(':form_id',$form_id);
            return $this->db->getSingle();
        }

        public function createForm($data){
            $this->db->query("INSERT INTO form_response (service, client_name, client_surname, client_email, client_phone, message) values (:service, :client_name,
             :client_surname, :client_email, :client_phone, :message)");
            $this->db->bind(':service', $data['service']);
            $this->db->bind(':client_name', $data['client_name']);
            $this->db->bind(':client_surname', $data['client_surname']);
            $this->db->bind(':client_email', $data['client_email']);
            $this->db->bind(':client_phone', $data['client_phone']);
            $this->db->bind(':message', $data['message']);
            

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function updateForm($data){
            $this->db->query("UPDATE form_response SET service=:service, client_name=:client_name, client_surname=:client_surname,
                     client_email=:client_email, client_phone=:client_phone, message=:message");
            $this->db->bind(':service', $data['service']);
            $this->db->bind(':client_name', $data['client_name']);
            $this->db->bind(':client_surname', $data['client_surname']);
            $this->db->bind(':client_email', $data['client_email']);
            $this->db->bind(':client_phone', $data['client_phone']);
            $this->db->bind(':message', $data['message']);
            

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function delete($data){
            $this->db->query("DELETE FROM form_response WHERE form_id=:form_id");
            $this->db->bind('form_id',$data['form_id']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }