<?php

class telemetryActionModel
{
    public function __construct()
    {
        $this->db = new Model;
    }
    public function getActions()
    {
        $this->db->query("SELECT * FROM telemetry_action");
        return $this->db->getResultSet();
    }

    public function getAction($action_id)
    {
        $this->db->query("SELECT * FROM telemetry_action WHERE action_id = :action_id");
        $this->db->bind(':action_id', $action_id);
        return $this->db->getSingle();
    }

    public function createAction($data)
    {
        $this->db->query("INSERT INTO telemetry_action (action_type, timestamp, ip_address, admin_id) values (:action_type, :timestamp, :ip_address, :admin_id)");
        $this->db->bind(':action_type', $data['action_name']);
        $this->db->bind(':timestamp', $data['timestamp']);
        $this->db->bind(':ip_address', $data['ip_address']);
        $this->db->bind(':admin_id', $data['admin_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateAction($data)
    {
        $this->db->query("UPDATE telemetry_action SET action_type=:action_name, timestamp=:timestamp, ip_address=:ip_address, admin_id=:admin_id WHERE action_id=:action_id");
        $this->db->bind(':action_type', $data['action_name']);
        $this->db->bind(':timestamp', $data['timestamp']);
        $this->db->bind(':ip_address', $data['ip_address']);
        $this->db->bind(':admin_id', $data['admin_id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($data)
    {
        $this->db->query("DELETE FROM telemetry_action WHERE action_id=:action_id");
        $this->db->bind('action_id', $data['action_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
