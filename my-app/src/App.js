import logo from './logo.svg';
import './App.css';
import { useState } from 'react';
// 리액트에서 제공하는 기본적인 함수

function Create(props) {
    return (
        <article>
            <h2>Create</h2>
            <form
                onSubmit={(event) => {
                    event.preventDefault();
                    const title = event.target.title.value;
                    const body = event.target.body.value;
                    props.onCreate(title, body);
                }}
            >
                <p>
                    <input type="text" name="title" placeholder="title"></input>
                </p>
                <p>
                    <textarea name="body" placeholder="body"></textarea>
                </p>
                <p>
                    <input type="submit" value="Create"></input>
                </p>
            </form>
        </article>
    );
}

function Header(props) {
    // 무조건 대문자로 시작 / 컴포넌트
    return (
        <header>
            <h1>
                <a
                    href="#"
                    onClick={(event) => {
                        event.preventDefault();
                        // event.preventDefault(); => defaultPrevented: false -> true 가 됨
                        props.onChangMode();
                    }}
                >
                    {props.title}
                </a>
                {/* 중괄호 안에는 표현식으로 인식 */}
            </h1>
        </header>
    );
}
function Article(props) {
    return (
        <div>
            <article>
                <h2>{props.title}</h2>
                {props.body}
            </article>
        </div>
    );
}
function Nav(props) {
    // console.log(props);
    const lis = [];
    for (let i = 0; i < props.topics.length; i++) {
        let t = props.topics[i];
        // console.log(t.id);
        // - props.topics
        // 0: {id: 1, title: 'html', body: 'html is ...'}
        // 1: {id: 2, title: 'css', body: 'css is ...'}
        // 2: {id: 3, title: 'javascript', body: 'javascript is ...'}
        lis.push(
            <li key={t.id}>
                <a
                    id={t.id}
                    href={'/read/' + t.id}
                    onClick={(event) => {
                        event.preventDefault();
                        props.onChangMode(Number(event.target.id)); // event.target : 이벤트를 발생시킨 타겟
                    }}
                >
                    {t.title}
                </a>
            </li>
        );
    }
    return (
        <nav>
            <ol>{lis}</ol>
        </nav>
    );
}

function Update(props) {
    const [title, setTitle] = useState[props.title];
    const [body, setBody] = useState[props.body];
    return (
        <article>
            <h2>Update</h2>
            <form
                onSubmit={(event) => {
                    event.preventDefault();
                    const title = event.target.title.value;
                    const body = event.target.body.value;
                    props.onUpdate(title, body);
                }}
            >
                <p>
                    <input
                        type="text"
                        name="title"
                        placeholder="title"
                        value={title}
                        onChange={(event) => {
                            console.log(event.target.value);
                        }}
                    ></input>
                </p>
                <p>
                    <textarea name="body" placeholder="body" value={body}></textarea>
                </p>
                <p>
                    <input type="submit" value="Update"></input>
                </p>
            </form>
        </article>
    );
}

function App() {
    // const _mode = useState('Welcome');
    // const mode = _mode[0];
    // const setMode = _mode[1];
    // 밑에와 같음
    const [mode, setMode] = useState('Welcome');
    const [id, setId] = useState(null);
    const [topics, setTopics] = useState([
        { id: 1, title: 'html', body: 'html is ...' },
        { id: 2, title: 'css', body: 'css is ...' },
        { id: 3, title: 'javascript', body: 'javascript is ...' },
    ]);
    const [nexId, setNexId] = useState(4);

    let content = null;
    let contextControl = null;
    let title,
        body = null;
    if (mode === 'Welcome') {
        content = <Article title="Welcome" body="Hello, WEB"></Article>;
    } else if (mode === 'READ') {
        for (let i = 0; i < topics.length; i++) {
            if (topics[i].id === id) {
                title = topics[i].title;
                body = topics[i].body;
            }
        }
        content = <Article title={title} body={body}></Article>;
        contextControl = (
            <li>
                <a
                    href={'/update/' + id}
                    onClick={(event) => {
                        event.preventDefault();
                        setMode('Update');
                    }}
                >
                    Update
                </a>
            </li>
        );
    } else if (mode === 'Create') {
        content = (
            <Create
                onCreate={(_title, _body) => {
                    const newTopic = { id: nexId, title: _title, body: _body };
                    const newTopics = [...topics]; // topics를 복제한 복제본
                    newTopics.push(newTopic);
                    setTopics(newTopics);
                    setMode('READ');
                    setId(nexId);
                    setNexId(nexId + 1);
                }}
            ></Create>
        );
    } else if (mode === 'Update') {
        for (let i = 0; i < topics.length; i++) {
            if (topics[i].id !== id) {
                title = topics[i].title;
                body = topics[i].body;
            }
        }
        console.log(title);
        content = <Update title={title} body={body} onUpdate={(title, body) => {}}></Update>;
    }
    return (
        <div>
            <Header
                title="WEB"
                onChangMode={() => {
                    setMode('Welcome');
                }}
            ></Header>
            <Nav
                topics={topics}
                onChangMode={(_id) => {
                    setMode('READ');
                    setId(_id);
                }}
            ></Nav>
            {content}
            {/* <Article title="Hi" body="Hello, REACH"></Article> */}
            {/* 리액트의 속성을 프롭(PROP)이라고 부름 */}
            <ul>
                <li>
                    <a
                        href=""
                        onClick={(event) => {
                            event.preventDefault();
                            setMode('Create');
                        }}
                    >
                        Create
                    </a>
                </li>
                {contextControl}
            </ul>
        </div>
    );
}

export default App;

// state : 컨포넌트를 만드는 외부자를 위한 데이터
// setMode 를 누르면 useState가 mode의 값을 바꿔줌
