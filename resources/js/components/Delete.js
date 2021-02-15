import React from 'react';
import ReactDOM from 'react-dom';
import swal from 'sweetalert';

function Delete(props) {
    const destroy = (e) => {
        const afterDeleted = e.currentTarget.parentNode
    swal("Delete this post ?",{
        buttons : ["No" , "Yes"]
    }).then((value) => {
        if (value == true) {
            axios.delete(props.endpoint). then((response) => {
                afterDeleted.remove()
            })
        }
    });
    console.log(response.data);
    }
    return (
            <button onClick={destroy} className="btn btn-danger">Delete</button>
    );
}

export default Delete;

if (document.querySelectorAll('delete')) {
    const deleteNodes = document.querySelectorAll('.delete')
    deleteNodes.forEach((item) =>{
        var endpoint =
        ReactDOM.render(<Delete endpoint={item.getAttribute('endpoint')}/>,item);
    })
}