import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import {CssBaseline, Container, Modal, CircularProgress, Grid, Paper, Avatar, Card, CardMedia, CardContent, CardActions} 
	from '@material-ui/core';
import Typography from '@material-ui/core/Typography';
import FavoriteIcon from '@material-ui/icons/Favorite';
import { StylesProvider } from '@material-ui/core/styles';

import axios from 'axios';

export default class Main extends Component {
		
	constructor(props) {
		super(props);    
		this.state = {
			api_url: "/web-api/photographer/1",
			profile : {album:[]},
			errorModalOpen : false,
			errorModalText : "",
			loading: false,
		}  
	}
	
	onErrorModalClose() {
		this.setState ({
			errorModalOpen: false,
			errorModalText : ""
		});
	}
		
	componentDidMount() {
		this.setState({loading: true});
	
		axios.get(this.state.api_url)
		.then(response => {
			this.setState({loading: false});
			if (typeof response == "undefined")
				this.setState({
					errorModalOpen: true,
					errorModalText : "<p>No data returned</p>Please call support +1 (416) 111-11-11"								
				});
			else 
				this.setState({
					profile: response.data
				});
		})
		.catch(error => {
			this.setState({
				loading: false,
				errorModalOpen: true,
				errorModalText : "<p>" + error + "</p>Please call support +1 (416) 111-11-11"								
			});	
		})	
	}
	
    render() {    
        return (
    		<div className="root">
    			<CssBaseline />
    			<StylesProvider injectFirst>
        		<Container maxWidth="md">
        			{this.state.loading && <CircularProgress size={50} className="progress" />}
        			<Modal
		    			aria-labelledby="simple-modal-title"
		    			aria-describedby="simple-modal-description"
		    			open={this.state.errorModalOpen}
		    			onClose={this.onErrorModalClose}
		    		>
		    			<div className="error-modal">
		    				<h2 id="simple-modal-title">Error happened!</h2>
		    				<p id="simple-modal-description" dangerouslySetInnerHTML={{ __html: this.state.errorModalText }}>
		    				</p>
		    			</div>
		    		</Modal>	
					<Grid container direction="column" spacing={2}>  
	    				<Grid item xs={12}>
	    					<Paper className="paper-profile">
	            				<Grid container direction="row" alignItems="center" justify="center" spacing={1}>
	            					<Grid item xs={12} sm={2}>
	            				    	<Avatar alt={this.state.profile.name} 
	            				    		src={this.state.profile.profile_picture} 
	            				    		className='profile-avatar' />
	            					</Grid>	
	            					<Grid item xs={12} sm={7}>
	            						<Typography className="profile-name">
	            							{ this.state.profile.name }
	            						</Typography>
	            						Bio
	            						{ this.state.profile.bio }
	            					</Grid>	
	            					<Grid item xs={12} sm={3} className="contact-info">
	            						<div className="profile-phone-header">Phone:</div>
	            						<div className="profile-phone">{this.state.profile.phone}</div>
		            					<div className="profile-email-header">Email:</div>
		            					<div className="profile-email">{this.state.profile.email}</div>
	            					</Grid>	
	            				</Grid>
	    					</Paper>
	              		</Grid>
	              		<Grid item xs={12}>
	              			<Grid container direction="row" justify="space-around" alignItems="center">  
		              			{this.state.profile.album.map ((photo, index) => 
			              			<Card 
			              				className="photo-card"
			              				key={index}	
			              			>
				              			<CardMedia
					                        className="photo-card-media"
					                        image={photo.img}
					                        title={photo.title}
					                    />
				              			<div className="photo-card-title">
				              				{ photo.title }
				              			</div>
				              			<CardContent p={1} className="photo-card-content">
				              				{ photo.description }
				              			</CardContent>
				              			<CardActions className="photo-card-action">
			              					<FavoriteIcon className={photo.featured ? "favorite-icon" : "favorite-icon-white" }/>
			              					<div className="photo-card-date">{ photo.date }</div>
				              			</CardActions>
				              		</Card>	              				              			
		              			)}
		              		</Grid>	
	              		</Grid>
              		</Grid>  
        		</Container>
        		</StylesProvider>
    		</div>
        );
    }
}
    
if (document.getElementById('root')) {
    ReactDOM.render(<Main/>, document.getElementById('root'));
}
