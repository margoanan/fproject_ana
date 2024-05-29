<?php
class Transaction_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get_all_transactions() {
        return $this->db->get('transactions')->result();
    }

    public function get_transaction_by_id($transaction_id) {
        return $this->db->get_where('transactions', array('id' => $transaction_id))->row();
    }

    public function add_transaction($data) {
        return $this->db->insert('transactions', $data);
    }

    public function update_transaction($transaction_id, $data) {
        $this->db->where('id', $transaction_id);
        return $this->db->update('transactions', $data);
    }

    public function delete_transaction($transaction_id) {
        return $this->db->delete('transactions', array('id' => $transaction_id));
    }
}
?>
