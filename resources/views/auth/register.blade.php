<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

     <form action="{{ route('register') }}" method="post">
        @csrf
        <h1>Register Form📝</h1>
        <input type="text" name="name" placeholder="Enter your name"> <br>
        <input type="email" name="email" placeholder="Enter your email"> <br>
        <input type="password" name="password" placeholder="Enter your password"> <br>
        <button type="submit">Login</button>
     </form>
</div>

<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(to right, #dbe6f6, #c5796d);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  form {
    background: #fff;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    text-align: center;
    width: 300px;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
  }

  button {
    background-color: #4a90e2;
    color: white;
    padding: 12px;
    border: none;
    width: 100%;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  button:hover {
    background-color: #357ab8;
  }

  ::placeholder {
    color: #999;
  }
</style>
