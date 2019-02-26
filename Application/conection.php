<?php
class Connection
{
	var $servername;
    var $username;
    var $password;
	var $dbname;

    function Connection($servername="localhost", $username="root", $password="", $dbname="jeipipli_institute")
        {
            $this->host=$servername;
            $this->dbname=$dbname;
            $this->username=$username;
            $this->password=$password;
            $this->Connect();
        }	
	function Connect()
        {
            $this->dbconnect =new mysqli($this->host, $this->username, $this->password, $this->dbname);
			
        }
		
	function ExecQuery($sql)
        {
            $this->result=$this->dbconnect->query($sql);
			//$this->query->Free();
            return $this->result;
        }

    function FetchResult ()
    {
        if ($this->result)
        {
            $this->arr=$this->result->fetch_array ();
            return $this->arr;
        }
        else
        {  
            return null;
        }
    }
	function Error ()
    {
        if (version_compare(phpversion(), "4.2.0", "ge")>0)
        {
            $this->error=$this->dbconnect->errno;
        	return $this->error;
        }
    }
	function numRows()
	{
		$this->rows=$this->result->num_rows;
		return $this->rows; 
	}
		
	function EscString($str)
	{
		$this->result=$this->dbconnect->real_escape_string($str);
		return $this->result;
	}
    function insertedId($sql)
     {
         $this->dbconnect->query($sql);
         $this->result=$this->dbconnect->insert_id;
         return $this->result;
     }
     
      // ======================Function to send mail ===================  
    function Sendmail($strFrom, $strTo, $strSubject, $strMessage) {
	//echo $strFrom.','.$strTo.','.$strSubject.','.$strMessage;    exit;
        $MailMessage = "";
        $headers = "";
        //$name = ($name != '') ? $name : 'Sir / Madam';
        if ($strTo != "") {
            $mailTo = $strTo;
            $MailMessage.="<table cellspacing='0' cellpadding='2' border='0' bgcolor='#cccccc'>";
            $MailMessage.="<tr bgcolor='#FFFFFF'>";
            $MailMessage.="<td>" . $strMessage . "</td>";
            $MailMessage.="</tr>";
            $MailMessage.="</table>";
            $headers.= "FROM:" . $strFrom . "\n";
            $headers.= 'MIME-Version: 1.0' . "\n";
            $headers.= "Content-Type: text/html; charset=ISO-8859-1\n";            
            mail($mailTo, $strSubject, $MailMessage, $headers);            
        }
    }
   
}
?>