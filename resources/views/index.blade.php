<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <style>
  .container{
    background-color: #ffff99;
    width:100vw;
    height:100vh;
    position:relative;
  }
  .card{
    border:1px solid #0000;
    border-radius: 10px;
    background-color: #ffff;
    width:70%;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    padding:0 20px 20px 20px;
  }
  .title{
    font-size:25px;
    font-weight:bold;
  }
  .table-wrap{
    display: flex;
  }
  input{
    border:1px solid #eeeeee;
    border-radius: 3px;
  }
  .input-update,
  .input-add{
    width:80%;
    height:30px;
  }
  .add-btn,
  .update-btn,
  .delete-btn{
    background-color: #ffff;
    border-radius: 5px;
    padding:5px 15px;
  }
  .add-btn{
    border:2px solid #ff88ff;
    color:#ff88ff;
  }
  .update-btn{
    border:2px solid #ff8856;
    color:#ff8856;
  }
  .delete-btn{
    border:2px solid #77f9c3;
    color:#77f9c3;
  }
  .add-btn:hover{
    background-color: #ff88ff;
    color:#ffff;
  }
  .update-btn:hover{
    background-color: #ff8856;
    color:#ffff;
  }
  .delete-btn:hover{
    background-color: #77f9c3;
    color:#ffff;
  }
  table{
    margin-top:20px;
  }
  </style>
</head>

<body>
<div class="container">
  <div class="card">
    <p class="title">食事管理</p>
    <div class="meal-management">
      <form action="/meal/create" method="POST">
      @csrf
      <input type="date" name="date">
      <input type="submit" value="記録する" class="add-btn" id="add-btn">
      <table>
      <tr>
        <th>作成日</th>
        <th>朝食</th>
        <th>昼食</th>
        <th>夕食</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      <td>
      </td>
      <td>
        <input type="text" class="input-add" value="" name="breakfast">
      </td>
      <td>
        <input type="text" class="input-add" value="" name="lunch">
      </td>
      <td>
        <input type="text" class="input-add" value="" name="dinner">
      </td>
      <td>
        <input type="hidden" name="id" value={{$items["id"]}}>
        <input type="submit" value="更新" class="update-btn">
      </td>
      <td>
        <form action="/todo/delete" method="POST">
        @csrf
        <input type="hidden" name="id" value={{$items["id"]}}>
        <input type="submit" value="削除" class="delete-btn"></button>
        </form>
      </td>
      </tr>
    </table>
    </form>
    <table>
      @foreach($items as $item)
      <tr>
        <td>
          {{$items["updated_at"]}}
        </td>
        <form action="/todo/update" method="POST">
        @csrf
        <td>
          <input type="text" class="input-update" value="{{$items["breakfast"]}}" name="content">
        </td>
        <td>
          <input type="text" class="input-update" value="{{$items["lunch"]}}" name="content">
        </td>
        <td>
          <input type="text" class="input-update" value="{{$items["dinner"]}}" name="content">
        </td>
        <td>
        <input type="hidden" name="id" value={{$items["id"]}}>
        <input type="submit" value="更新" class="update-btn"></button>
        </form>
        </td>
        <td>
        <form action="/todo/delete" method="POST">
        @csrf
        <input type="hidden" name="id" value={{$items["id"]}}>
        <input type="submit" value="削除" class="delete-btn"></button>
        </form>
        </td>
      </tr>
      @endforeach

      <div class="empty">
      <tr>
        <td>
          {{$items["updated_at"]}}
        </td>
        <form action="/todo/update" method="POST">
        @csrf
          <td>
            <input type="text" class="input-add" value="" name="content">
          </td>
          <td>
            <input type="text" class="input-add" value="" name="content">
          </td>
          <td>
            <input type="text" class="input-add" value="" name="content">
          </td>
          <td>
            <input type="hidden" name="id" value={{$items["id"]}}>
            <input type="submit" value="更新" class="update-btn"></button>
          </form>
        </td>
        <td>
          <form action="/todo/delete" method="POST">
          @csrf
          <input type="hidden" name="id" value={{$items["id"]}}>
          <input type="submit" value="削除" class="delete-btn"></button>
        </form>
      </td>
    </tr>
  </div>
    </table>
    </div>
  </div>
</div>
<script>
  const target = document.getElementById("add-btn");
target.addEventListener('click', () => {
  target('open');
});
</script>
</body>
</html>