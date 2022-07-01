import { useState, useEffect } from 'react';

function App() {
    const [toDo, setToDo] = useState('');
    const [toDos, setToDos] = useState([]);
    const onChange = (e) => setToDo(e.target.value);
    const onSubmit = (event) => {
        event.preventDefault();
        if (toDo == '') {
            return;
        }

        setToDos((currentArray) => [toDo, ...currentArray]); // [Newtext , 값 넣을 배열]
        setToDo('');
    };
    console.log(toDos);

    return (
        <div>
            <form onSubmit={onSubmit}>
                <input
                    onChange={onChange}
                    value={toDo}
                    type="text"
                    placeholder="Write your to do..."
                />
                <button>Add To Do</button>
            </form>
        </div>
    );
}

export default App;
