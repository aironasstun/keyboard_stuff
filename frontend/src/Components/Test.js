import React from 'react';

import axios from 'axios';

export default class PersonList extends React.Component {
  state = {
    persons: []
  }

  componentDidMount() {
    axios.get(`http://backend.test/api/keyboards`)
      .then(res => {
        const keeb = res.data;
        this.setState({ keeb });
      })
  }

  render() {
    return (
      <ul>
        { this.state.keeb.map(ok => <li>{ok.author}</li>)}
      </ul>
    )
  }
}