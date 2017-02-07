<?php
/**
 * A method to check if a Post request has been made.
 *    
 * @return Boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}
/* *
 * Creates a new row at bottom of the sex Table.
 * 
 * @return Boolean
 */
function createCorpData($company, $address, $city, $state, $phone, $zipcode, $email, $enroll, $fullname) {
    $result = false;
    
    $db = getDatabase();
    
    $stmt = $db->prepare("INSERT INTO sex SET company = :company, address = :address, city = :city, state = :state, phone = :phone, zipcode = :zipcode,  email = :email, enroll = :enroll, fullname = :fullname");
    
    $binds = array(
        ":company"    => $company,
        ":address"    => $address,
        ":city"    => $city,
        ":state"    => $state,
        ":phone"    => $phone,
        ":zipcode"    => $zipcode,
        ":email"   => $email,
        ":enroll" => $enroll,
        ":fullname"   => $fullname,
       
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = true;
    }
    
    return $result;
}
/**
 * Retreives ALL ROWS from sex Table
 * 
 * @return String
 */
function viewAllFromCorps() {
    $db = getDatabase();
    
    $stmt = $db->prepare("SELECT * FROM sex");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    return $results;
}
/**
 * Retreives a SINGLE ROW from sex Table
 * 
 * @return String
 */
function viewOneFromCorps($id) {
    $db = getDatabase();
    
    $stmt = $db->prepare("SELECT * FROM sex WHERE id = :id");
    
    $binds = array(
        ":id" => $id
    );
    
    $result = array();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    return $result;
}
/**
 * Deletes a new row from the sex Table.
 * 
 * @return Boolean
 */
function deleteFromCorps($id) {
    $isDeleted = false;
    
    $db = getDatabase();
    
    $stmt = $db->prepare("DELETE FROM sex WHERE id = :id");
    
    $binds = array(
        ":id" => $id
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $isDeleted = true;
    }
    
    return $isDeleted;
}
/**
 * Updates a specified row from sex table
 * 
 * @return Boolean
 */
function updateCorpsRow($id, $company, $address, $city, $state, $phone, $zipcode, $email, $enroll, $fullname) {
    $result = false;
    
    $db = getDatabase();
    
    $stmt = $db->prepare("UPDATE sex SET company = :company, address = :address, city = :city, state = :state, phone = :phone, zipcode = :zipcode, email = :email, enroll = :enroll, fullname = :fullname WHERE id = :id");
    
    $binds = array(
        ":id"      => $id,
        ":company"    => $company,
        ":address"    => $address,
        ":city"    => $city,
        ":state"    => $state,
        ":phone"   => $phone,
        ":zipcode" => $zipcode,
        ":email" => $email,
        ":enroll"   => $enroll,
        ":fullname"   => $fullname,
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = true;
    }
    
    return $result;  
}