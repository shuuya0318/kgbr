<?php
$data =  json_decode(file_get_contents('php://input'));
//�Է��� �޾Ƽ�$data������ �������

//$data->user_key : ������� ����Ű
//$data->type : text/photo �� ���������� �������� �̵������ ����
//$data->content : �޽��� ����(text�� ��� �޽�����,photo�� ��� �̵���� �ּҰ� ����ִ�.)

if("$data->content"== "�޴�1"){

echo <<< EOD
{
  "message": {
    "text": "�޴�1�Է½� ����� ����"
  },
  "keyboard": {	//����â ǥ��
    "type": "buttons",
    "buttons": [
      "�޴�1",
      "�޴�2",
      "�޴�3"
    ]
  }
}
EOD;
?>